<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocupation;

class OcupationController extends Controller
{
    public function Index() {
        $ocupation = Ocupation::latest()->paginate(5);
        
        return view('ocupation.index', compact('ocupation'));
    }

    public function Show() {}

    public function Store(Request $request) {
        $request->validate([
            'OcupationName' => 'required'
        ]);

        $form_data = array('OcupationName' => $request->OcupationName);

        Ocupation::create($form_data);

        return redirect('ocupation')->with('success', 'Data Added successfully.');
    }
    
    public function Edit() {}
    
    public function Delete() {}
}
