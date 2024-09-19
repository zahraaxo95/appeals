<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import the Request class
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Sector;
use App\Models\Observation;
use App\Models\Procedure; 
use app\Models\Division; 


class ProceduresController extends Controller
{
    public function proceduresGuide()
    {
        $sectors = Sector::with('administration')->get();
        return view('procedures', compact('sectors'));
    }


    public function listProcedures($observationId)
    {
        // Retrieve procedures based on the observation ID from your database
        $procedures = Procedure::where('observation_id', $observationId)->get();

        // You can customize this logic based on your database structure

        return view('procedures-list', ['procedures' => $procedures]);
    }

    public function procedureDetails(Procedure $procedure)
    {
        // Use Eloquent relationships to load the related data
        $procedure->load('observation.division.administration.sector');

        return view('procedure-details', ['procedure' => $procedure]);
    }
    public function updateProcedureDetails(Request $request, Procedure $procedure)
    {
        $validatedData = $request->validate([
            'procedure_content' => 'required|string', // Add appropriate validation rules
            // Other fields and validation rules...
        ]);
    
        // Update the procedure_content field in the database
        $procedure->procedure_content = $validatedData['procedure_content'];
        $procedure->save();
    
        // You can return a response if needed
        return response()->json(['message' => 'تم حفظ التغييرات بنجاح !']);
    }
    



}
