<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class PostController extends Controller

{
    public function index(Request $request)
    {
        if ($request->get('category_id')) {
            $posts = Post::query()->where('category_id', $request->get('category_id'))->paginate(5);
        } else {
            $posts = Post::query()->paginate(5);
        }
        $categories = Category::all();

        return view('admin.posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
    $image = $request->file('image');
    $path = $image->store('post_image');
        }
        Post::query()->create($data);

        return redirect()->route('admin.posts.index');
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

    public function deleteAll()
    {
        Post::query()->delete();
        return redirect()->route('admin.posts.index')->with('Все статьи удалены');
    }


    public function indexDeleted()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.indexDeleted', [
            'posts' => $posts]);
    }


    public function restore(int $id)
    {
        Post::query()->onlyTrashed()->where('id', $id)->restore();

        return redirect()->route('admin.posts.index')->with('статья восстановлена');
    }
}
