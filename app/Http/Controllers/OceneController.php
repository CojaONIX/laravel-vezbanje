<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocene;

class OceneController extends Controller
{
    public function addGrade(Request $request)
    {
        $request->validate([
            'predmet' => 'required|string|min:2|max:64',
            'profesor' => 'required|string|min:2|max:64',
            'ocena' => 'required|int|min:1|max:5'
        ]);

        Ocene::create([
            'predmet' => $request->predmet,
            'profesor' => $request->profesor,
            'ocena' => $request->ocena
        ]);

      
        return redirect('/');
    }

    public function deleteGrade(Request $request, $id)
    {

        $ocena = Ocene::findOrFail($id);
        $ocena->delete();

        return redirect('/');
    }
}
