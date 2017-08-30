<?php

namespace App\Http\Controllers;

use App\Voters;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function showAll()
    {
        return Voters::all();
    }

    public function show($id)
    {
        return Voters::findOrFail($id);
    }

    public function store(Request $request)
    {

        // store
        $contact = new Voters;
        $contact->first_name   = $request->input('first_name');
        $contact->middle_name  = $request->input('middle_name');
        $contact->last_name    = $request->input('last_name');
        $contact->username    = $request->input('username');
        $contact->gender    = $request->input('gender');
        $contact->password       = $request->input('password');
        $contact->save();

        return 1;
        
    }

    public function update($id, Request $request)
    {   
        // update
        $contact = Voters::find($id);
        $contact->first_name   = $request->input('first_name');
        $contact->middle_name  = $request->input('middle_name');
        $contact->last_name    = $request->input('last_name');
        $contact->username    = $request->input('username');
        $contact->gender    = $request->input('gender');
        $contact->password       = $request->input('password');
        $contact->save();

        return 1;
    }

    public function voterLogin(Request $request)
    {
        $contact = Voters::where('username', $request->input('username'))->where('password', $request->input('password'))->first();

        if($contact) {
            $state = array(
                'password' => $request->input('password'),
                'date' => date('M-y-d')
            );

            return base64_encode(json_encode($state));
        }
        else {
            $state = array(
                'status' => false,
                'statusText' => 'User Not Found'
            );

            return json_encode($state);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    // public function destroy($id)
    // {
    //     // soft delete
    //     $contact = Voters::find($id);
    //     $contact->isDeleted    = 1;
    //     $contact->save();

    //     return 1;
    // }
}