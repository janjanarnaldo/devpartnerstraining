<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showAll()
    {
        return Contacts::all();
    }

    public function show($id)
    {
        return Contacts::findOrFail($id);
    }

    public function store(Request $request)
    {

        // store
        $contact = new Contacts;
        $contact->first_name   = $request->input('FirstName');
        $contact->middle_name  = $request->input('MiddleName');
        $contact->last_name    = $request->input('LastName');
        $contact->gender       = $request->input('Gender');
        $contact->mobile       = $request->input('Mobile');
        $contact->save();

        return 1;
        
    }
}