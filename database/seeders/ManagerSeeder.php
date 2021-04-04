<?php

namespace Database\Seeders;

use App\Models\Collaborator;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ticto',
                'email' => 'ticto@ticto.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'type' => 1,
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Hedley',
                'email' => 'hedley.ti@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'type' => 1,
                'remember_token' => Str::random(10),
            ]
        ];

        foreach ($users as $user) {
            $user = User::create($user);
            Collaborator::factory()->create([
                'user_id' => $user['id'],
                'name' => $user['name'],
            ]);
        }
    }
}
