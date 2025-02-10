<?php

namespace App\Http\Controllers;

use App\Models\AdminSpecializedCategoryModel;
use App\Models\AdminSpecializedModel;
use Illuminate\Http\Request;

class AdminSpecializedCategoryController extends Controller
{
    public function index()
    {
        $categories = AdminSpecializedCategoryModel::get();
        $spinfo = AdminSpecializedModel::get();
        return view('admin-specialized', compact('categories', 'spinfo'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'category' => 'string',
        ]);

      
        AdminSpecializedCategoryModel::create([
            'category' => $request->input('category'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category' => 'string',
        ]);

        $categoryInfo = AdminSpecializedCategoryModel::find($id);

        if ($categoryInfo) {
            $categoryInfo->category = $request->input('category');
            $categoryInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id)
    {
        $categoryInfo = AdminSpecializedCategoryModel::find($id);

        if ($categoryInfo) {
           
            $categoryInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
