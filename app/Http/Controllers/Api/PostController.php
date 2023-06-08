<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        try {
            $posts = Post::paginate(perPage: 5);
            return PostResource::collection($posts);
        } catch (\Exception $exception) {
            \Log::critical($exception->getMessage());
            return \response([
                'success' => false,
                'message' => 'Что пошло не так'
            ]);
        }

    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }
}
