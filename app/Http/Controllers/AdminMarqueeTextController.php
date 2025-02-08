<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutDescModel;
use App\Models\AdminAboutFAQModel;
use App\Models\AdminMarqueeTextModel;
use Illuminate\Http\Request;

class AdminMarqueeTextController extends Controller
{
    public function index()
    {
        $marquees = AdminMarqueeTextModel::get();
        $abouts = AdminAboutDescModel::get();
        $faqs = AdminAboutFAQModel::get();
        
        return view('admin-about', compact('marquees', 'abouts', 'faqs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'marquee_text' => 'string',
        ]);

        // Create a new sports information record
        AdminMarqueeTextModel::create([
            'marquee_text' => $request->input('marquee_text'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'marquee_text' => 'string',
        ]);

        $marqueeTextInfo = AdminMarqueeTextModel::find($id);

        if ($marqueeTextInfo) {

            $marqueeTextInfo->marquee_text = $request->input('marquee_text');
            $marqueeTextInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $marqueeTextInfo = AdminMarqueeTextModel::find($id);

        if ($marqueeTextInfo) {

            $marqueeTextInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
