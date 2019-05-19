<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresenceController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('presence');
    }

    public function list(Request $request)
    {
             $data = $request->all();
             $joursdef=$data['joursdef'];// le nombre de jours par default
             $jf=$data['jf']; // le nombre de jours féries 
             $jp=$joursdef-$jf;

             return view('listpresence', array('joursdef' => $jp ) );


    }
}
