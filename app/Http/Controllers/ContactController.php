<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('user.contactUsMail.contact-us'); 

    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'name' => $request->message,
        ];
// 'name' => $request->name, varable name kome from input name =name 

Mail::to('tahanina2014@yahoo.com')->send(new ContactMail($details));
return back()->with('message|_sent', 'Your message has been sent seccessfully');
    }
}
