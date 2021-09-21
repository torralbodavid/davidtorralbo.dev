<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('github_stats');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
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
}
