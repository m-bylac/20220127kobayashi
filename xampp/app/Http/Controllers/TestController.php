<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\thanks;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        return view('contact.thanks');
    }
}
