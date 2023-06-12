@extends('admin.layouts.layout')

@section('content')

    <a href="{{ route('admin.categories.create') }}">Создать категорию</a>

    <div class="">
        @foreach($categories as $category)
            <div class="w-full sm:max-w-md mb-4 px-6 py-4 bg-white ">
                <h3>{{$category->title}}</h3>
                <a  href="{{ route('admin.categories.edit',$category) }}">Редактировать</a><br>
                <form method="POST" action="{{route('admin.categories.destroy', $category)}}">
                    @csrf
                    @method('DELETE')
                    <button>Удалить</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection

