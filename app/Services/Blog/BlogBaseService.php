<?php

namespace App\Services\Blog;

use App\Contracts\Blog\BlogBaseServiceInterface;
use App\Services\BaseService;

/**
 * Class BlogBaseService
 * @package App\Services
 */
abstract class BlogBaseService extends BaseService
{
    public function __construct()
    {
        parent::__construct();
        //add things for all blog services
    }
}
