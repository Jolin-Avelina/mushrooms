<?php

namespace App\Http\Controllers;

use App\Models\Mushroom;
use Illuminate\Http\Request;

class MushroomController extends Controller
{
    //
    public function index(){
        $mushrooms=Mushroom::all();
        return view('mushrooms.index',['mushrooms'=>$mushrooms]);
    }
}
