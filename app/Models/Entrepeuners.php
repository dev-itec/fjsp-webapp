<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepeuners extends Model
{
    use HasFactory;
    protected $fillable = [
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
        'is_active'
    ];
}
