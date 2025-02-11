<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminAboutFAQModel;
use App\Models\AdminBlogModel;
use App\Models\AdminMarqueeTextModel;
use App\Models\AdminNumbersModel;
use App\Models\AdminPartnerModel;
use App\Models\AdminProjectModel;
use App\Models\AdminServiceModel;
use App\Models\AdminSpecializedModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index(){

        $services = AdminServiceModel::get();
        $videos = AdminVideoDescModel::get();
        $projects = AdminProjectModel::get();
        $blogs = AdminBlogModel::get();
        $spInfo = AdminSpecializedModel::inRandomOrder()->paginate(6);
        $partners = AdminPartnerModel::get();
        $nums = AdminNumbersModel::get();
        $marquees = AdminMarqueeTextModel::get();
        $faqs = AdminAboutFAQModel::get();

        return view('user-home', compact('services', 'videos', 'projects', 'blogs', 'spInfo', 'partners', 'nums', 'marquees', 'faqs'));
    }
}
