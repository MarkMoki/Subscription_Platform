<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\JsonResponse;

class WebsiteController extends Controller
{
    /**
     * Display a listing of websites.
     */
    public function index(): JsonResponse
    {
        $websites = Website::all();
        return response()->json($websites);
    }
}
