<?php

namespace Database\Seeders;

use App\Models\Collaborator;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollaboratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            User::factory(5)->create()->each(function ($user) {
                Collaborator::factory(1)->create([
                    'user_id' => $user['id'],
                    'name' => $user->name
                ]);
            });
        });
    }
}
