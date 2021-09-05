<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Limpitay',
            
            'email' => 'admin@gmail.com',
            'password' => bcrypt('55555555'),
        ]);

        User::factory(5)->create();
    }
}
