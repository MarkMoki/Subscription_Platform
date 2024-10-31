<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Website;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and websites
        $users = User::all();
        $websites = Website::all();

        foreach ($users as $user) {
            // Randomly pick 5 websites for the user to subscribe to
            $subscriptions = $websites->random(5);

            foreach ($subscriptions as $website) {
                Subscription::firstOrCreate([
                    'user_id' => $user->id,
                    'website_id' => $website->id,
                ]);
            }
        }
    }
}
