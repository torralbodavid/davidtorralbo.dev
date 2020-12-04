<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GithubStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('github_stats', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->integer('repositories');
            $table->integer('stargazers');
            $table->integer('contributions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('github_stats');
    }
}
