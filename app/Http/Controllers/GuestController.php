<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class GuestController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function createPostcard() {
        return view('pages.create-postcard');
    }

    public function storePostcard(Request $request) {
        $data = $request -> all();
        dd($data);

    }

}
