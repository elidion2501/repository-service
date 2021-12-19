<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseApiContoller extends Controller
{
    public function __construct()
    {
        parent::__construct();

        //add things for all API controllers
    }
}
