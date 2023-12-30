<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardOneController extends Controller
{
    //

    public function home()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashone.home')->with($data);
    }


    public function table()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashone.table')->with($data);
    }

    public function forms()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashone.forms')->with($data);
    }
}
