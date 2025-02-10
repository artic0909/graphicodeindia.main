<?php

namespace App\Http\Controllers;

use App\Models\AdminProjectModel;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{

    public function index()
    {

        $projects = AdminProjectModel::get();
        return view('admin-projects', compact('projects'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
            'category' => 'string',
            'link' => 'string',
            'desc' => 'string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/projects', $fileName, 'public');
        }

        // Create a new
        AdminProjectModel::create([
            'image' => $filePath ?? null,
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'link' => $request->input('link'),
            'desc' => $request->input('desc'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
            'category' => 'string',
            'link' => 'string',
            'desc' => 'string',
        ]);

        $projectInfo = AdminProjectModel::find($id);

        if ($projectInfo) {
            if ($request->hasFile('image')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $projectInfo->image))) {
                    unlink(public_path('storage/' . $projectInfo->image));
                }

                // Store the new image
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/projects', $fileName, 'public');
                $projectInfo->image = $filePath;
            }

            $projectInfo->title = $request->input('title');
            $projectInfo->category = $request->input('category');
            $projectInfo->link = $request->input('link');
            $projectInfo->desc = $request->input('desc');
            $projectInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $projectInfo = AdminProjectModel::find($id);

        if ($projectInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $projectInfo->image))) {
                unlink(public_path('storage/' . $projectInfo->image));
            }

            // Delete the record
            $projectInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
