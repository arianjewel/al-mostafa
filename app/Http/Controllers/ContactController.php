<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMailable;
use Mail;
use CRUDBooster;
class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {

        $this->validate($request, [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:20',
        'phone' => 'max:200'
        ]);

        $data = [
            'name'      => $request->name,
            'email'      => $request->email,
            'message'   => $request->message,
            'phone'   => $request->phone,
            'from'      => env('MAIL_USERNAME'),
        ];


     Mail::to(CRUDBooster::getSetting('contact_email'))->send(new SendMailable($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
