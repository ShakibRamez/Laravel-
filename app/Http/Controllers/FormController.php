<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
      
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);


        return view('thanks', ['name' => $validated['name']]);
    }
}

