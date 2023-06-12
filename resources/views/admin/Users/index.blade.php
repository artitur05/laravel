@extends('admin.layouts.layout')

@section('content')

    <div class="">
        @foreach($users as $user)
            <div class="w-full sm:max-w-md mb-4 px-6 py-4 bg-white ">
                <h3>{{$user->name}}</h3>
                <h3>{{$user->email}}</h3>

            </div>
        @endforeach
    </div>
@endsection
