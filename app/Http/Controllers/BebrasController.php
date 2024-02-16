<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebrasController extends Controller
{
    public function hello($color)
    {


        //dd($color);

        return view('bebrai.bebras', ['color1' => $color]);
    }

    public function atimti($one, $two)
    {




        return view('bebrai.minus', ['rez' => $one - $two]);
    }
}
