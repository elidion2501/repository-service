<?php

namespace App\Repositories\Blog;

use App\Contracts\Blog\Repository\BlogRepositoryInterface;

class BlogRepository extends BlogBaseRepository implements BlogRepositoryInterface
{
    public function __construct()
    {
        parent::__construct();
    }
}
