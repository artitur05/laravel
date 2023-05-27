@extends('layouts.layout')

@section('content')

    <a href="{{ route('admin.posts.create') }}">Создать статью</a>

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
    </div>
@endsection

