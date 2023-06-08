<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $user = User ::paginate(perPage: 5);
            return UserResource::collection($user);
        } catch (\Exception $exception) {
            \Log::critical($exception->getMessage());
            return \response([
                'success' => false,
                'message' => 'Что пошло не так'
            ]);
        }

    }

    public function show(User $user)
    {
        return new UserResource($user);
    }
}
