<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('layouts.modal.index');
    }
}
