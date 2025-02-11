<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $inquiries = ContactModel::get();
        return view('admin-inquiries', compact('inquiries'));
    }


    public function destroy($id)
    {
        $inquiryInfo = ContactModel::find($id);

        if ($inquiryInfo) {

            $inquiryInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


}
