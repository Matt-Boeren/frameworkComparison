<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friendship extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId1',
        'userId2',
        'user1Verified',
        'user2Verified',
    ];
}
