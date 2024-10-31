<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 15 users with unique emails
        foreach (range(1, 15) as $number) {
            User::create([
                'email' => "user{$number}@example.com",
            ]);
        }
    }
}
