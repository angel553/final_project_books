<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'User Test',
            'email' => 'test@test.com',
            'password' => bcrypt(12345678),
            'tipo' => 'Administrador',
            'email_verified_at' => now()
        ]);

        User::factory(10)->create();
    }
}
