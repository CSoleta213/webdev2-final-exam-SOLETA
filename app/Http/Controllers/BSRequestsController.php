<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BSRequest;

class BSRequestsController extends Controller
{
    public function getBSRequest(Request $req) {
        $bs_request = new BSRequest;
        $bs_request->complete_name = $req->complete_name;
        $bs_request->email_add = $req->email_add;
        $bs_request->contact_number = $req->contact_number;
        $bs_request->birthdate = $req->birthdate;
        $bs_request->religious_affiliation = $req->religious_affiliation;
        $bs_request->bs_date = $req->bs_date;
        $bs_request->bs_time = $req->bs_time;
        $bs_request->bs_location = $req->bs_location;
        $bs_request->save();
        return view('thank-you');
    }

    public function showBSRequests() {
        $data = BSRequest::all();
        return view('requests',['bs_requests'=>$data]);
    }
}
