<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Create a new post for a specific website.
     */
    public function store(Request $request, $websiteId): JsonResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $website = Website::findOrFail($websiteId);
        $post = $this->postService->createPost($website, $request->only('title', 'description'));

        return response()->json($post, 201);
    }
}
