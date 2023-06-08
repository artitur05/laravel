@extends('layouts.layout')

@section('content')

    <div class="">

        @foreach($posts as $post)
            <div class="w-full sm:max-w-md mb-4 px-6 py-4 bg-white ">
                <h3>{{$post->title}}</h3>
                <p>{{$post->content}}</p>
                <span>{{$post->deleted_at}}</span>
                <form method="POST" action="{{route('admin.posts.restore', $post->id)}}">
                    @csrf
                    @method('PUT')
                    <button>Восстановить</button>
                </form>
            </div>
        @endforeach
    </div>

@endsection
