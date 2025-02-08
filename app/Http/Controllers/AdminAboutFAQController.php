<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutFAQModel;
use Illuminate\Http\Request;

class AdminAboutFAQController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'string',
            'answer' => 'string',
        ]);

        // Create a new
        AdminAboutFAQModel::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'string',
            'answer' => 'string',
        ]);

        $aboutDescInfo = AdminAboutFAQModel::find($id);

        if ($aboutDescInfo) {

            $aboutDescInfo->question = $request->input('question');
            $aboutDescInfo->answer = $request->input('answer');
            $aboutDescInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $aboutDescInfo = AdminAboutFAQModel::find($id);

        if ($aboutDescInfo) {

            $aboutDescInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
