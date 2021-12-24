<?php

namespace App\Http\Requests\Api\v1\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogIndexRequest extends FormRequest
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
            'date' => ['date', 'nullable'],
            'perPage' => ['numeric', 'nullable'],
            'published' => ['array', 'nullable'],
            'published.*' => ['boolean', 'nullable'],
            'categories' => ['array', 'nullable'],
            'categories.*' => ['string', 'nullable'],
        ];
    }
}
