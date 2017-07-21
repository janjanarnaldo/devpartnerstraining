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
        // return Contacts::findOrFail($id);

        echo "<pre>";
         // var_dump([{"id":8,"first_name":"Tet","middle_name":"test","last_name":"test","gender":"Male","mobile":"1232132","created_at":"2017-03-17 17:19:12","updated_at":"2017-03-17 17:19:12"}); 
        var_dump('test')
         die;
        echo "</pre>";
        
        
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