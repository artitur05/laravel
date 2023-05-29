<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryReqest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function edit(string $id)
    {
        $categories = Category::query()->where('id', $id)->firstOrFail();
        return view('admin.categories.edit',['category' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryReqest $request)
    {
        $data = $request->all();
        Category::query()->create($data);

        return redirect()->route('admin.categories.index')->with('Успешно, ','Категория создана');
    }

    public function update(CategoryReqest $request, Category $category)
    {
        $data = $request->all();
        $category->update($data);

        return redirect()->route('admin.categories.index')->with('Категория обновлена');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('Категория удалена');
    }
}
