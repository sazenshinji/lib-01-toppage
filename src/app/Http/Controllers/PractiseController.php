<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PractiseController extends Controller
{
    public function index()
    {
        return view('practise_page');
    }
}
