<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadMoreController extends Controller
{
    public function index()
    {
        return view('user.ajax.index');
    }
}
