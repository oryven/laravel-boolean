<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function createPostcard() {
        return view('pages.create');
    }

}
