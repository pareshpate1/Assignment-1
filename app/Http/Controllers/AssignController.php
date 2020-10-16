<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;
class AssignController extends Controller
{

    public function index()
    {
        $post=Assign::latest('date')->get();
        //dd($post);
        return view('layout', compact('post'));
    }
    //
}
