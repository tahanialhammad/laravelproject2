<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function info()
    {
        return view('user.info.index');
    }
}
