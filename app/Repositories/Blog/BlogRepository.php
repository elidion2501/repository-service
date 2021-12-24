<?php

namespace App\Repositories\Blog;

use App\Contracts\Blog\Repository\BlogRepositoryInterface;
use App\Models\Blog;
use App\Models\User;

class BlogRepository extends BlogBaseRepository implements BlogRepositoryInterface
{

    protected $with = ['user'];

    public function __construct()
    {
        parent::__construct();
    }

    public function getBlogsWithSimplePagination(
        $date = null,
        int|null $perPage = null,
        array|null $published = null,
        User|null $user = null, 
        array|null $userIds = [],
        array|null $categories = [],
        array|null $with = null
    ) {
        $blogs = Blog::query()
            ->when($categories != [], function ($query) use ($categories) {
                $query->whereIn('category',  $categories);
            })
            ->when($date != null, function ($query) use ($date) {
                $query->whereDate('created_at',  $date);
            })
            ->when($userIds != [], function ($query) use ($userIds) {
                $query->whereIn('user_id',  $userIds);
            })
            ->whereIn('published', $published == null ? [true] : $published)
            ->with($with == null ? $this->with : $with)
            ->simplePaginate($perPage == null ? 10 : $perPage);

        return  $blogs;
    }
}
