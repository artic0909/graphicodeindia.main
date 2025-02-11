<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminBlogModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserBlogController extends Controller
{

    public function index()
    {

        $blogs = AdminBlogModel::orderBy('id', 'desc')->paginate(4);
        $videos = AdminVideoDescModel::get();

        return view('user-blogs', compact('videos', 'blogs'));
    }


    public function singleBlogDetails($slug)
    {

        $blog = AdminBlogModel::where('slug', $slug)->first();
        $videos = AdminVideoDescModel::get();

        if (!$blog) {
            return abort(404, 'Blog not found.');
        }

        return view('user-single-blog', compact('blog', 'videos'));
    }
}
