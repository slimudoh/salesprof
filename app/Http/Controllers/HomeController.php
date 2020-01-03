<?php

namespace salesprof\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('content.home');
    }

    public function about()
    {
        return view('content.about');
    }

    public function services()
    {
        return view('content.services');
    }

    public function training()
    {
        return view('content.training');
    }

    public function contact()
    {
        return view('content.contact');
    }

    public function mail(Request $request)
    {
        $fname = $request->input("fname");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $subject = $request->input("subject");
        $msg = $request->input("msg");


        $data = array('fname' => $fname, 'email' => $email, 'phone' => $phone, 'subject' => $subject, 'msg' => $msg);

        Mail::send('emails.mail', $data, function ($m) use ($data) {
            $m->from($data['email'], $data['fname']);
            $m->to("slimudoh@yahoo.com", "slim")->subject('New Message!');
        });
        return redirect('mailsuccess');
    }

    public function success()
    {
        return view('emails.success');
    }

}

