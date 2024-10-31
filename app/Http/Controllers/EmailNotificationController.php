<?php

namespace App\Http\Controllers;

use App\Services\EmailNotificationService;
use Illuminate\Http\JsonResponse;

class EmailNotificationController extends Controller
{
    protected $emailNotificationService;

    public function __construct(EmailNotificationService $emailNotificationService)
    {
        $this->emailNotificationService = $emailNotificationService;
    }

    /**
     * Command to send email notifications for new posts.
     */
    public function sendNotifications(): JsonResponse
    {
        $sentCount = $this->emailNotificationService->sendPendingNotifications();

        return response()->json([
            'message' => 'Notifications sent successfully',
            'total_sent' => $sentCount,
        ]);
    }
}
