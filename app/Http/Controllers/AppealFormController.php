<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appeal; // assume you have an AppealForm model

class AppealFormController extends Controller
{
    public function index()
    {
        $appeal_reason = ''; // Initialize an empty string or set a default value
        return view('appealForm', compact('appeal_reason'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'civilId' => 'required|string',
            'fullname' => 'required|string',
            'phone' => 'required|string',
            'appeal_reason' => 'required|string',
        ]);
    
        $appealForm = appeal_form::create([
            'civilId' => $request->input('civilId'),
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
            'appeal_reason' => $request->input('appeal_reason'),
        ]);
    
        return redirect()->route('appealForm')->with('success', 'Appeal form submitted successfully!');
    }

    public function edit($id)
    {
        $appealForm = AppealForm::find($id);
        return view('appealFormEdit', compact('appealForm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'civilId' => 'required|string',
            'fullname' => 'required|string',
            'phone' => 'required|string',
            'appeal_reason' => 'required|string',
        ]);

        $appealForm = AppealForm::find($id);
        $appealForm->civilId = $request->input('civilId');
        $appealForm->fullname = $request->input('fullname');
        $appealForm->phone = $request->input('phone');
        $appealForm->appeal_reason = $request->input('appeal_reason');
        $appealForm->save();

        return redirect()->route('appeal.form')->with('success', 'Appeal form updated successfully!');
    }

    public function destroy($id)
    {
        $appealForm = AppealForm::find($id);
        $appealForm->delete();

        return redirect()->route('appeal.form')->with('success', 'Appeal form deleted successfully!');
    }
}