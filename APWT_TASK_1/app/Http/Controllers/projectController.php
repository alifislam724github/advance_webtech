<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    //
    public function homepage()
    {
        return view ('homepage');
    }
    public function contact()
    {
        return view ('contact');
    }
    public function aboutUs()
    {
        return view ('aboutUs');
    }
    public function ourTeams()
    {
        return view ('ourTeams');
    }
    public function service()
    {
        $f1= array ("health service", "telecom service", "security service", );

        return view ('service')
        ->with("f1", $f1);
    }
}

