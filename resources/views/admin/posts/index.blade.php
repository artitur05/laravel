@extends('admin.layouts.layout')

@section('content')

    <div>
<form method="get" class="flex" action="{{ route('admin.posts.index') }}">
    <label>
        <select

            name="category_id"
            class="border-gray-300 rounded-md shadow-sm block mt-1 w-1/4">
            <option selected disabled hidden></option>
            @foreach($categories as $category)
                <option
                    @selected(old('category_id', request()->get('category_id')) == $category->id)
                    value="{{ $category->id }}">
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
    </label>
    <button class="p-2 rounded-md bg-indigo-100 ml-4">Отфильтровать</button>
    <a href="{{ route('admin.posts.index') }}" class="p-2 rounded-md bg-gray-100 ml-4">Сбросить фильтры</a>
</form>
    </div>


    <a href="{{ route('admin.posts.create') }}">Создать статью</a>
    <form method="POST" action="{{route('admin.posts.delete-all')}}">
        @csrf
        @method('DELETE')
        <button>Удалить <b>ВСЁ</b></button>
    </form>
    <a href="{{route('admin.posts.index-deleted')}}">Удаленные статьи</a>

    <div class="">
        @foreach($posts as $post)
            <div class="w-full sm:max-w-md mb-4 px-6 py-4 bg-white ">
                <h3>{{$post->title}}</h3>
                <p>{{$post->content}}</p>
                <span>{{$post->created_at}}</span>
                <a  href="{{ route('admin.posts.edit',$post->id) }}">Редактировать</a><br>
                <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
                    @csrf
                    @method('DELETE')
                    <button>Удалить</button>
                </form>
            </div>
        @endforeach
        {{$posts->links()}}
    </div>

@endsection

