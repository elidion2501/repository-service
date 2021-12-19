<?php

namespace App\Repositories\Blog;

use App\Repositories\BaseRepository;

abstract class BlogBaseRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct();
        //add things to all repositories
    }
}
