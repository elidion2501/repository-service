<?php

namespace App\Http\Controllers\Api\v1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\Blog\BlogIndexRequest;
use App\Http\Requests\Blog\BlogCreateRequest;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

/**
 * 
 * @group Blog
 * 
 * @authenticated
 * 
 */
class BlogApiContoller extends BlogBaseApiController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * GET Blogs
     * 
     * Take all blogs
     * 
     * @bodyParam date string  Get blog by specific date. No-example
     * @bodyParam perPage integer   Count of blogs per page. Example:1
     * @bodyParam published boolean[]   Published staet filter. [true]
     * @bodyParam categories string[]  Array of categories. No-example
     *
     * @return \Illuminate\Http\Response
     */

    public function index(BlogIndexRequest $request)
    {

        $blogs = $this->blogRepository->getBlogsWithSimplePagination(
            date: $request->date,
            perPage: $request->perPage,
            published: $request->published,
            categories: $request->categories
        );

        return response()->json($blogs);
    }

    /**
     * POST Create blog
     * 
     * create a new blog
     * 
     * @bodyParam user_id integer  User crete id. Example:1
     * @bodyParam title string  Title. Example: tets title
     * @bodyParam subtitle string  Subtitle. Example: tets subtitle
     * @bodyParam description string  Description. Example: tets description description description
     * @bodyParam category string  Category for blog. Example:category1
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newBlog = $this->blogService->createBlog($request->all());
        } catch (ValidationException $exception) {
            return response()->json(['error' => 'Validation error.']);
        }
        return response()->json($newBlog, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
