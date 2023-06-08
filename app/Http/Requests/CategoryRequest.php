<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest

{
    public function rules(): array
    {
        return [
            'title' => ['string', 'max:50']
        ];
    }
}

