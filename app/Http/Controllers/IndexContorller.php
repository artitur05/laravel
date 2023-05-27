<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexContorller extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $title = 'Блог';
        $subtitle = 'Все статьи';
        $posts = [
            [
                'title' => 'Название статьи',
                'subtitle' => 'Описание',
                'created_at' => 'Дата'
            ],[
                'title' => 'Название статьи',
                'subtitle' => 'Описание',
                'created_at' => 'Дата'
            ],[
                'title' => 'Название статьи',
                'subtitle' => 'Описание',
                'created_at' => 'Дата'
            ],[
                'title' => 'Название статьи',
                'subtitle' => 'Описание',
                'created_at' => 'Дата'
            ],[
                'title' => 'Название статьи',
                'subtitle' => 'Описание',
                'created_at' => 'Дата'
            ]
        ];
        return view('index', [
            'title' => $title,
            'subtitle' => $subtitle,
            'posts' => $posts
        ]);
    }
}
