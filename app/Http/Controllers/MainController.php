<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function contact_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:30',
            'subject' => 'required|min:4|max:50',
            'message' => 'required|min:15|max:500',
        ]);
    }
}
