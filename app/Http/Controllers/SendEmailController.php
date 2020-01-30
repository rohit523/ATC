<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('pages.request');
    }

    function send(Request $request)
    {

        return $request;
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('2017.vinod.rohit@ves.ac.in')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
