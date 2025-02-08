<?php

namespace App\Http\Controllers;

use App\Models\AdminPartnerModel;
use Illuminate\Http\Request;

class AdminPartnerController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'partner_logo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('partner_logo')) {
            $file = $request->file('partner_logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/partner', $fileName, 'public');
        }


        AdminPartnerModel::create([
            'partner_logo' => $filePath ?? null,
        ]);

        return back()->with('success', 'Information added successfully!');
    }




    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'partner_logo' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $PartnerLogoInfo = AdminPartnerModel::find($id);

        if ($PartnerLogoInfo) {
            if ($request->hasFile('partner_logo')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $PartnerLogoInfo->partner_logo))) {
                    unlink(public_path('storage/' . $PartnerLogoInfo->partner_logo));
                }

                // Store the new image
                $file = $request->file('partner_logo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/partner', $fileName, 'public');
                $PartnerLogoInfo->partner_logo = $filePath;
            }

            $PartnerLogoInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }



    public function destroy($id)
    {
        $PartnerLogoInfo = AdminPartnerModel::find($id);

        if ($PartnerLogoInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $PartnerLogoInfo->partner_logo))) {
                unlink(public_path('storage/' . $PartnerLogoInfo->partner_logo));
            }

            // Delete the record
            $PartnerLogoInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
