<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersgame extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'gameId',
        'village',
        'city',
        'longestRoad',
        'biggestArmy',
        'victoryPoint',
        'verified'
    ];
}
