<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Stats extends Model
{
    use Rememberable;
    use HasFactory;

    protected $rememberFor = 60 * 120;
    protected $table = 'github_stats';
    protected $fillable = ['username', 'repositories', 'stargazers', 'contributions'];
}
