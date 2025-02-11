<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminProjectModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserProjectController extends Controller
{
    public function index()
    {

        $projects = AdminProjectModel::orderBy('id', 'desc')->paginate(4);
        $videos = AdminVideoDescModel::get();

        return view('user-projects', compact('videos', 'projects'));
    }
}
