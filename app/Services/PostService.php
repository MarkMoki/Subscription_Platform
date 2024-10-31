<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Support\Facades\DB;

class PostService
{
    /**
     * Create a new post for a website and trigger notifications for subscribers.
     */
    public function createPost(Website $website, array $data): Post
    {
        return DB::transaction(function () use ($website, $data) {
            // Create the post
            $post = $website->posts()->create([
                'title' => $data['title'],
                'description' => $data['description'],
            ]);

            // Dispatch event to send notifications to subscribers
            event(new \App\Events\PostCreated($post));

            return $post;
        });
    }
}
