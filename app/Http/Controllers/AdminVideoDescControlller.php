<?php

namespace App\Http\Controllers;

use App\Models\AdminNumbersModel;
use App\Models\AdminVideoDescModel;
use Illuminate\Http\Request;

class AdminVideoDescControlller extends Controller
{
    public function index()
    {
        $datas = AdminVideoDescModel::get();
        $videoCount = AdminVideoDescModel::count();

        $nums = AdminNumbersModel::get();
        $numCount = AdminNumbersModel::count();

        return view('admin-home', compact('datas', 'videoCount', 'nums', 'numCount'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'wlcm_txt' => 'string',
            'desc' => 'string',
            'contact' => 'string',
            'email' => 'email',
        ]);

        // Create a new sports information record
        AdminVideoDescModel::create([
            'wlcm_txt' => $request->input('wlcm_txt'),
            'desc' => $request->input('desc'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'wlcm_txt' => 'string',
            'desc' => 'string',
            'contact' => 'string',
            'email' => 'email',
        ]);

        $videoInfo = AdminVideoDescModel::find($id);

        if ($videoInfo) {

            $videoInfo->wlcm_txt = $request->input('wlcm_txt');
            $videoInfo->desc = $request->input('desc');
            $videoInfo->contact = $request->input('contact');
            $videoInfo->email = $request->input('email');
            $videoInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id){
        $videoInfo = AdminVideoDescModel::find($id);

        if ($videoInfo) {

            $videoInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
