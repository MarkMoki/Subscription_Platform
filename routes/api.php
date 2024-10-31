<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\EmailNotificationController;

// Route to list all websites (optional)
Route::get('/websites', [WebsiteController::class, 'index']);

// Route to create a new post for a specific website
Route::post('/websites/{websiteId}/posts', [PostController::class, 'store']);

// Route to subscribe a user to a specific website
Route::post('/websites/{websiteId}/subscribe', [SubscriptionController::class, 'subscribe']);

// Route to send email notifications for new posts
Route::post('/send-notifications', [EmailNotificationController::class, 'sendNotifications']);
