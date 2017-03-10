<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('layouts.widget.index');
    }
}
