<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\kirimEmail;
use Mail;


class EmailController extends Controller
{
    public function showcontact(){
        return view('index');
    }

    public function sendEmail(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $email = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message']
        ];

        Mail::to('alpagaming005@gmail.com')->send(new kirimEmail($email));

        return redirect()->back()->with('message_sent', 'Pesan Anda Sudah Terkirim Kami Akan Segera Menghubungi Anda!');
    }
}
