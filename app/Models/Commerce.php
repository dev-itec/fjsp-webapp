<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'rut',
        'address',
        'description',
        'fb_page',
        'tw_profile',
        'ig_profile',
        'ws_number',
        'web_page',
        'logo',
        'email',
        'is_active',
        'city',
        'tel'
    ];
}
