<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PlaceController extends Controller
{
    //

    public function index(){

        return View('home.index');
    }

    public function generate_place_id(Request $request){

        $request->validate([
            'commune'=> 'required',
            'zone'=>'required',
        ]);

        $commune = $request->commune ?? '';
        $zone = $request->zone ?? '';

        $message = strtoupper( substr($commune,0,2) . rand(1, 999) . substr($zone,0,2));
        return back()->with('info',$message);
    }
}
