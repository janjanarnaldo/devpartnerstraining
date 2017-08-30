<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Voters;
use App\Votes;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function showAll()
    {
        return Votes::all();
    }

    public function show($id)
    {
        return Votes::findOrFail($id);
    }

    public function store(Request $request)
    {

        // store
        $contact = new Votes;
        $contact->candidate_id   = $request->input('candidate_id');
        $contact->voter_id  = $request->input('voter_id');
        $contact->count       = 1;
        $contact->save();

        return 1;
        
    }

    public function update($id, Request $request)
    {   
        // update
        $contact = Votes::find($id);
        $contact->candidate_id   = $request->input('candidate_id');
        $contact->voter_id  = $request->input('voter_id');
        $contact->count = 1;
        $contact->save();

        return 1;
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
    //     $contact = Votes::find($id);
    //     $contact->isDeleted    = 1;
    //     $contact->save();

    //     return 1;
    // }
}