<?php

namespace Organo\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function team() {
        $data = \Organo\Member::all();
        return $data;
    }
}
