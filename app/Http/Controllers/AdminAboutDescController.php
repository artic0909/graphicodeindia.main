<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutDescModel;
use Illuminate\Http\Request;

class AdminAboutDescController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'desc_one' => 'string',
            'desc_two' => 'string',
            'desc_three' => 'string',
        ]);

        // Create a new
        AdminAboutDescModel::create([
            'desc_one' => $request->input('desc_one'),
            'desc_two' => $request->input('desc_two'),
            'desc_three' => $request->input('desc_three'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'desc_one' => 'string',
            'desc_two' => 'string',
            'desc_three' => 'string',
        ]);

        $aboutDescInfo = AdminAboutDescModel::find($id);

        if ($aboutDescInfo) {

            $aboutDescInfo->desc_one = $request->input('desc_one');
            $aboutDescInfo->desc_two = $request->input('desc_two');
            $aboutDescInfo->desc_three = $request->input('desc_three');
            $aboutDescInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $aboutDescInfo = AdminAboutDescModel::find($id);

        if ($aboutDescInfo) {

            $aboutDescInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
