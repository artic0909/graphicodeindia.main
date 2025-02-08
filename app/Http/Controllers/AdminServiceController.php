<?php

namespace App\Http\Controllers;

use App\Models\AdminServiceModel;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

    public function index()
    {
        $services = AdminServiceModel::get();
        return view('admin-services', compact('services'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/service', $fileName, 'public');
        }

        // Create a new
        AdminServiceModel::create([
            'image' => $filePath ?? null,
            'title' => $request->input('title'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string',
        ]);

        $optionalSessionInfo = AdminServiceModel::find($id);

        if ($optionalSessionInfo) {
            if ($request->hasFile('image')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $optionalSessionInfo->image))) {
                    unlink(public_path('storage/' . $optionalSessionInfo->image));
                }

                // Store the new image
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/service', $fileName, 'public');
                $optionalSessionInfo->image = $filePath;
            }

            $optionalSessionInfo->title = $request->input('title');
            $optionalSessionInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $optionalSessionInfo = AdminServiceModel::find($id);

        if ($optionalSessionInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $optionalSessionInfo->image))) {
                unlink(public_path('storage/' . $optionalSessionInfo->image));
            }

            // Delete the record
            $optionalSessionInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
