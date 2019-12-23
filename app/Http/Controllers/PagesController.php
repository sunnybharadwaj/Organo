<?php

namespace Organo\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing(){
        return view('pages.landing');
    }
}
