<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller

{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function edit(string $id)
    {
        $post = Post::query()->where('id', $id)->firstOrFail();
        return view('admin.posts.edit',['post' => $post]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
            $data = $request->all();
            Post::query()->create($data);

        return redirect()->route('admin.posts.index')->with('Успешно, ','Статья создана');
    }

    public function update(PostRequest $request, Post $post)
    {
        $data = $request->all();
        $post->update($data);

        return redirect()->route('admin.posts.index')->with('Статья обновлена');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('Статья удалена');
    }

}
