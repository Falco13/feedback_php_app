<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        Paginator::useBootstrap();
        $contacts = new ContactModel();
        return view('contact', ['cont' => $contacts->paginate(2)]);
    }

    public function contact_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:30|email',
            'subject' => 'required|min:4|max:50',
            'message' => 'required|min:15|max:500',
        ]);
        $contact = new ContactModel();
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->route('contact')->with('success', 'Thank you for your message!');
    }
}
