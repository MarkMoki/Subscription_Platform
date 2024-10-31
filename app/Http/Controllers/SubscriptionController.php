<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SubscriptionController extends Controller
{
    /**
     * Subscribe a user to a website.
     */
    public function subscribe(Request $request, $websiteId): JsonResponse
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $website = Website::findOrFail($websiteId);
        $user = User::findOrFail($request->input('user_id'));

        // Check if the subscription already exists
        $subscription = Subscription::firstOrCreate([
            'user_id' => $user->id,
            'website_id' => $website->id,
        ]);

        return response()->json($subscription, 201);
    }
}
