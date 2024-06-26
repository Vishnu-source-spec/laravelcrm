<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpdeskController extends Controller
{
    //

    public function dashboard(){

        return view('front.helpdesk.dashboard');
    }
}
