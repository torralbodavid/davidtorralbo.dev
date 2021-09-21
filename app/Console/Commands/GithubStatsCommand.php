<?php

namespace App\Console\Commands;

use App\Models\Stats;
use Github\Api\CurrentUser;
use Github\Api\GraphQL;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class GithubStatsCommand extends Command
{
    protected $signature = 'github:stats';

    protected $description = 'Update GitHub stats';

    private CurrentUser $currentUser;
    private GraphQL $graphQL;
    private Collection $stats;

    public function __construct()
    {
        parent::__construct();

        $this->stats = collect();
        $this->currentUser = GitHub::me();
        $this->graphQL = GitHub::graphql();
    }

    public function handle()
    {
        $this->info('Getting info from GitHub...');

        try {
            $this->stats = collect([
                'user' => $this->currentUser->show()['login'],
                'repositories' => $this->currentUser->show()['public_repos'],
                'stargazers' => collect($this->currentUser->repositories())->map(function ($repository) {
                    return ['stargazers_count' => $repository['stargazers_count']];
                })->sum('stargazers_count'),
                'contributions' => collect($this->graphQL->execute("query {
            user(login: \"{$this->currentUser->show()['login']}\") {
              contributionsCollection {
                contributionCalendar {
                  totalContributions
                }
              }
            }
          }"))->flatten()->first()]);
        } catch (\Exception $e) {
            $this->error('Error while getting info.');
        }

        $this->info('Trying to update the database...');

        try {
            Stats::updateOrCreate(['username' => $this->stats->get('user')],
                [
                    'repositories' => $this->stats->get('repositories'),
                    'stargazers' => $this->stats->get('stargazers'),
                    'contributions' => $this->stats->get('contributions'),
                ]);

            $this->info('Success!');

        } catch (\Exception $e) {
            $this->error('Error while updating the database.');
        }

        return 0;
    }
}
