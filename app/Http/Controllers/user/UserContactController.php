<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AdminSpecializedCategoryModel;
use App\Models\AdminVideoDescModel;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index()
    {

        $videos = AdminVideoDescModel::get();
        $categories = AdminSpecializedCategoryModel::get();

        return view('user-contact', compact('videos', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'phone_number' => 'string',
            'email' => 'string',
            'service' => 'string',
            'inquiry' => 'string',
        ]);

        try {
            ContactModel::create($validated);
            return back()->with('success', 'Inquiry sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send inquiry. Please try again.');
        }
        return back()->with('success', 'Information added successfully!');
    }
}
