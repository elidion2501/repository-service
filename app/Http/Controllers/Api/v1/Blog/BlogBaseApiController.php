<?php

namespace App\Http\Controllers\Api\v1\Blog;

use App\Http\Controllers\Api\v1\BaseApiContoller;
use App\Http\Controllers\Controller;
use App\Repositories\Blog\BlogRepository;
use App\Services\Blog\BlogService;
use Illuminate\Http\Request;

abstract class BlogBaseApiController extends BaseApiContoller
{
    protected $blogRepository;
    protected $blogService;

    public function __construct()
    {
        parent::__construct();
        $this->blogRepository = new BlogRepository;
        $this->blogService = new BlogService;
        //add things for all BlogApiControllers
    }
}
