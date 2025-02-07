<?php

namespace App\Http\Controllers;

use App\Models\AdminNumbersModel;
use Illuminate\Http\Request;

class AdminNumbersController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'n_title' => 'string',
            'n_num' => 'string',
        ]);

        // Create a new sports information record
        AdminNumbersModel::create([
            'n_title' => $request->input('n_title'),
            'n_num' => $request->input('n_num'),
        ]);

        return back()->with('success', 'Information added successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'n_title' => 'string',
            'n_num' => 'string',
        ]);

        $numberInfo = AdminNumbersModel::find($id);

        if ($numberInfo) {

            $numberInfo->n_title = $request->input('n_title');
            $numberInfo->n_num = $request->input('n_num');
            $numberInfo->save();

            return back()->with('success', 'Information updated successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }


    public function destroy($id){
        $numberInfo = AdminNumbersModel::find($id);

        if ($numberInfo) {

            $numberInfo->delete();

            return back()->with('success', 'Information deleted successfully!');
        } else {
            return back()->with('error', 'Information not found.');
        }
    }
}
