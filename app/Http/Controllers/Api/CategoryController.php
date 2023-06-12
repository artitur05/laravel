<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(CategoryRequest$request)
    {
        $category = Category::create($request->validated());
        if ($category) {
            return response([
                'success' => true,
                'message' => 'Создана категория с ID ' . $category->id
            ]);
        }
        return response([
            'success' => false,
            'message' => 'Ошибка'
        ]);
    }

    public function show(Category $category){
        return new CategoryResource($category);
    }
}
$qwe = 'project.ru/api/categories/{id}';
$qwe = 'project.ru/api/categories';
