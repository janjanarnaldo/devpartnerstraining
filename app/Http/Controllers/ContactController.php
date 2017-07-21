<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showAll()
    {
        return Contacts::all()->where('isDeleted', 0);
    }

    public function show($id)
    {
        return Contacts::findOrFail($id);
    }

    public function store(Request $request)
    {

        // store
        $contact = new Contacts;
        $contact->first_name   = $request->input('first_name');
        $contact->middle_name  = $request->input('middle_name');
        $contact->last_name    = $request->input('last_name');
        $contact->gender       = $request->input('gender');
        $contact->mobile       = $request->input('mobile');
        $contact->isDeleted    = 0;
        $contact->save();

        return 1;
        
    }

    public function update($id, Request $request)
    {   
        // update
        $contact = Contacts::find($id);
        $contact->first_name   = $request->input('first_name');
        $contact->middle_name  = $request->input('middle_name');
        $contact->last_name    = $request->input('last_name');
        $contact->gender       = $request->input('gender');
        $contact->mobile       = $request->input('mobile');
        $contact->isDeleted    = 0;
        $contact->save();

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // soft delete
        $contact = Contacts::find($id);
        $contact->isDeleted    = 1;
        $contact->save();

        return 1;
    }
}