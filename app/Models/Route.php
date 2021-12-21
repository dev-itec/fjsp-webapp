<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ini_lat',
        'ini_lng',
        'end_lat',
        'end_lng',
        'users_id',
        'created_at',
        'updated_at'
    ];
}
