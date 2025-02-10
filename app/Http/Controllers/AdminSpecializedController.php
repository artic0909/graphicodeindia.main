<?php

namespace App\Http\Controllers;

use App\Models\AdminSpecializedModel;
use Illuminate\Http\Request;

class AdminSpecializedController extends Controller
{

    public function store(Request $request)
    {

        $validated = $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
            'specialized_category' => 'string',
        ]);

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/specialized', $fileName, 'public');
        }

        // Create a new
        AdminSpecializedModel::create([
            'logo' => $filePath ?? null,
            'title' => $request->input('title'),
            'specialized_category' => $request->input('specialized_category'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'logo' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
            'specialized_category' => 'string',
        ]);

        $specializedInfo = AdminSpecializedModel::find($id);

        if ($specializedInfo) {
            if ($request->hasFile('logo')) {
                // Delete the old logo
                if (file_exists(public_path('storage/' . $specializedInfo->logo))) {
                    unlink(public_path('storage/' . $specializedInfo->logo));
                }

                // Store the new logo
                $file = $request->file('logo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/specialized', $fileName, 'public');
                $specializedInfo->logo = $filePath;
            }

            $specializedInfo->title = $request->input('title');
            $specializedInfo->specialized_category = $request->input('specialized_category');
            $specializedInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $specializedInfo = AdminSpecializedModel::find($id);

        if ($specializedInfo) {
            // Delete the logo file
            if (file_exists(public_path('storage/' . $specializedInfo->logo))) {
                unlink(public_path('storage/' . $specializedInfo->logo));
            }

            // Delete the record
            $specializedInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
