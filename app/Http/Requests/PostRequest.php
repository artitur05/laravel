<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['string','max:50'],
            'content' => ['string'],
            'user_id' => ['exists:users,id','int'],
            'category_id' => ['exists:categories,id','int'],
            'is_visible' => ['bool'],
            'published_at' => ['date'],
            'image' => ['image', 'mimes:jpg,jpeg,png,bmp,gif,svg']
       ];
    }
}
