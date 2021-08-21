<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ExampleMailable;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index(){
        return view('contactus.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $email = new ExampleMailable($request->all());
        Mail::to('aldo1rodrigo@gmail.com')->send($email);

        return redirect()->route('contactus.index')->with('info', 'Message send');
    }
}
