<?php

namespace App\Services\Blog;

use App\Contracts\Blog\Service\BlogServiceInterface;
use App\Http\Requests\Blog\BlogCreateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BlogService extends BlogBaseService implements BlogServiceInterface
{

    /**
     * Creating a new blog
     * 
     * @return Blog|ValidationException
     */
    public function createBlog(array $data)
    {
        $blogCreateRequest = new BlogCreateRequest;
        
        $validator = Validator::make(
            $data,
            $blogCreateRequest->rules(),
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $newBlog = Blog::create($validator->validated());

        return $newBlog;
    }
}
