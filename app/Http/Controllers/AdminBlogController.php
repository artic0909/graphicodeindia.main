<?php

namespace App\Http\Controllers;

use App\Models\AdminBlogModel;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {

        $blogs = AdminBlogModel::get();
        return view('admin-blogs', compact('blogs'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
            'date' => 'string',
            'desc' => 'string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
        }

        // Create a new
        AdminBlogModel::create([
            'image' => $filePath ?? null,
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'desc' => $request->input('desc'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
            'date' => 'string',
            'desc' => 'string',
        ]);

        $blogInfo = AdminBlogModel::find($id);

        if ($blogInfo) {
            if ($request->hasFile('image')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $blogInfo->image))) {
                    unlink(public_path('storage/' . $blogInfo->image));
                }

                // Store the new image
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
                $blogInfo->image = $filePath;
            }

            $blogInfo->title = $request->input('title');
            $blogInfo->date = $request->input('date');
            $blogInfo->desc = $request->input('desc');
            $blogInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $blogInfo = AdminBlogModel::find($id);

        if ($blogInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $blogInfo->image))) {
                unlink(public_path('storage/' . $blogInfo->image));
            }

            // Delete the record
            $blogInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
