<?php

namespace App\Contracts\Blog\Service;

use App\Http\Requests\Blog\BlogCreateRequest;

interface BlogServiceInterface extends BlogServiceBaseInterface
{
    public function createBlog(array $data);
}
