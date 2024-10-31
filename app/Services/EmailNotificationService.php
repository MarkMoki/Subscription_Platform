<?php

namespace App\Services;

use App\Models\EmailNotification;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class EmailNotificationService
{
    /**
     * Send notifications for all new posts to subscribers.
     */
    public function sendPendingNotifications(): int
    {
        $sentCount = 0;

        // Fetch posts that have not been fully notified to subscribers
        $posts = Post::with(['website.subscribers'])
            ->whereDoesntHave('emailNotifications', function ($query) {
                $query->where('sent', true);
            })
            ->get();

        foreach ($posts as $post) {
            foreach ($post->website->subscribers as $subscriber) {
                // Check if a notification has already been sent to avoid duplicates
                $notification = EmailNotification::firstOrCreate([
                    'user_id' => $subscriber->id,
                    'post_id' => $post->id,
                ], [
                    'sent' => false,
                ]);

                if (!$notification->sent) {
                    // Send plain-text email directly without Blade view
                    Mail::raw("New Post Published: {$post->title}\n\n{$post->description}", function ($message) use ($subscriber, $post) {
                        $message->to($subscriber->email)
                                ->subject("New Post: {$post->title}");
                    });

                    // Mark the notification as sent
                    $notification->update(['sent' => true]);
                    $sentCount++;
                }
            }
        }

        return $sentCount;
    }
}
