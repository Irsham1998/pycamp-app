<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// panggil model
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // beda lagi caranya astaga
        User::create([
            'name' => 'admin',
            'email' => 'sham@laracamp.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('shamlaracamp'),
            'is_admin' => true,
        ]);
    }
}
