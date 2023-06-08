@extends('layouts.layout')

@section('content')

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @foreach($errors->all() as $error)
            <span class="text-red-300">{{ $error }} </span>
        @endforeach


        <form class="" method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="block font-medium text-sm text-gray-700" for="email">
                    Название
                </label>
                <input
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    id="name" type="text" name="title" autofocus="autofocus">

            </div>
            <div>
                <label class="block font-medium text-sm text-gray-700" for="email">
                    Содержание
                </label>
                <textarea
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    id="name" type="text" name="content" autofocus="autofocus"></textarea>
            </div>
            <div>
                <label class="block font-medium text-sm text-gray-700" for="email">
                    ID Автора
                </label>
                <input
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    id="name" type="text" name="user_id" required="required" autofocus="autofocus">
            </div>
            <div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">
                        ID категории
                    </label>
                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                        id="name" type="text" name="category_id" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="published_at">
                        Дата публикации
                    </label>
                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                        id="published_at" type="text" name="published_at" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="published_at">
                        Загрузить файл
                    </label>
                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                        id="image" type="file" name="image"  autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">
                        Отображать?
                    </label>
                    <input
                        hidden
                        value="0" name="is_visible">
                    <input
                        value="1"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1"
                        id="published_at" type="checkbox" name="is_visible" autofocus="autofocus">
                </div>

                <button class="mt-10 p-3 bg-blue-600 rounded-md hover:bg-blue-400" type="submit">Сохранить</button>
        </form>
    </div>
@endsection
