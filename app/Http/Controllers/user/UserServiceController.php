<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminAboutDescModel;
use App\Models\AdminAboutFAQModel;
use App\Models\AdminNumbersModel;
use App\Models\AdminPartnerModel;
use App\Models\AdminProjectModel;
use App\Models\AdminSpecializedModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function index()
    {

        $abouts = AdminAboutDescModel::get();
        $videos = AdminVideoDescModel::get();
        $projects = AdminProjectModel::get();
        $spInfo = AdminSpecializedModel::inRandomOrder()->paginate(6);
        $nums = AdminNumbersModel::get();
        $faqs = AdminAboutFAQModel::get();
        $partners = AdminPartnerModel::get();

        return view('user-services', compact('abouts', 'videos', 'projects', 'spInfo', 'nums', 'faqs', 'partners'));
    }
}
