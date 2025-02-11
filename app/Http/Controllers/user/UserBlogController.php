<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminBlogModel;
use Illuminate\Http\Request;

class UserBlogController extends Controller
{
    public function index()
    {
        $blogs = AdminBlogModel::get();
        return view('user-single-blog', compact('blogs'));
    }
}
