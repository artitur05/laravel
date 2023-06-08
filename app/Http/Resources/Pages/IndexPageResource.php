<?php

namespace App\Http\Resources\Pages;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexPageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */


    public function __construct()
    {
    }

    public function toArray(Request $request): array
    {
        return [
            'posts' => PostResource::collection(Post::paginate(5, pageName: 'postPage')),
            'categories' => CategoryResource::collection(Category::paginate(5, pageName: 'categoryPage')),
            'users' => UserResource::collection(User::paginate(5, pageName: 'userPage'))
        ];
    }
}
