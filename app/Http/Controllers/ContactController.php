<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $cname = $request->input('cname');
        $cemail = $request->input('cemail');
        $cphone = $request->input('cphone');
        $csubject = $request->input('csubject');
        $cmessage = $request->input('cmessage');

        $details = [

            'cname' => $cname,
            'cemail' => $cemail,
            'cphone' => $cphone,
            'csubject'=>$csubject,
            'cmessage'=>$cmessage,
        ];
    
        Mail::to('tapasp263@gmail.com')->send(new \App\Mail\MyTestMail($details));
    
        dd("Email is Sent.");
    }
}
