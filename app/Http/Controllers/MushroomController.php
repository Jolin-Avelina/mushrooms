<?php

namespace App\Http\Controllers;

use App\Models\Mushroom;
use Illuminate\Http\Request;

class MushroomController extends Controller
{
    //
    public function index()
    {
        $mushrooms = Mushroom::all();
        return view('mushrooms.index', ['mushrooms' => $mushrooms]);
    }

    public function info($id)
    {
        $mushroom = Mushroom::find($id);
        $capshape = [
            'b' => 'bell',
            'c' => 'conical',
            'x' => 'convex',
            'f' => 'flat',
            's' => 'sunken',
            'p' => 'spherical',
            'o' => 'others'

        ];
        $capsurface = [
            'i' => 'fibrous',
            'g' => 'grooves',
            'y' => 'scaly',
            's' => "smooth",
            'd' => 'dry',
            'h' => "shiny",
            'l'=>"leathery",
            'k'=>'silky' ,
            't'=>'sticky' ,
            'w'=>'wrinkled' ,
            'e'=>'fleshy' 
        ];
        #load from cap
        return view(
            'mushrooms.info',
            [
                'mushroom' => $mushroom,
                'capshape' => $capshape,
                'capsurface' => $capsurface
            ]
        );
    }
}
