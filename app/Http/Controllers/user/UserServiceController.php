<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminServiceModel;
use App\Models\AdminSpecializedCategoryModel;
use App\Models\AdminSpecializedModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function index()
    {

        $services = AdminServiceModel::get();
        $videos = AdminVideoDescModel::get();
        $categories = AdminSpecializedCategoryModel::get();
        $spInfo = AdminSpecializedModel::with('category')->inRandomOrder()->get();

        return view('user-services', compact('services', 'videos', 'categories', 'spInfo'));
    }
}
