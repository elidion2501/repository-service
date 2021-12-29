<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ['exists:users,id', 'required'],
            'title' => ['required', 'min:2', 'max:255', 'string'],
            'subtitle' => ['nullable', 'min:2', 'max:255', 'string'],
            'category' => ['nullable', 'min:2', 'max:255', 'string'],
            'description' => ['required', 'min:25', 'max:2000'],
        ];
    }
}
