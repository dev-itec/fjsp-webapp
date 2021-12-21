<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Ngo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ngos')->insert([
            'name' => 'Fundacion Juntos se Puede',
            'rut' => '901312245-5',
            'address' => 'Calle 104 #54-31, Bogotá',
            'description' => 'La Fundación Juntos se Puede es un medio de apoyo para los Venezolanos...',
            'ws_number' => '573225142181',
            'web_page' => 'https://www.juntossepuede.co/',
            'logo' => 'juntossepuede.png',
            'email' => 'info@juntossepuede.co'
        ]);
        User::factory()->create([
            'name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret'),
            'ngo_id' => 1
        ]);

    }
}
