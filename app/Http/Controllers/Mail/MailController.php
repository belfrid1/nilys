<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\SettingEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendMail($contactId){

        $contact = Contact::find($contactId);
        $contactEmail =  $contact->email;

        $subject = SettingEmail::latest()->first()->suject;
        $content = SettingEmail::latest()->first()->content;

        $details = [
            'title' => $subject,
            'body' => $content,
        ];
        try {
            Mail::to($contactEmail)->send(new \App\Mail\NilysMail($details));


        }catch (\Exception $e){
            return redirect()->route('contact.index')->with(['error' => $e]);
        }
        $contact->update([
                'status' => true
            ]
        );


        $contact = Contact::find($contactId);

        $contact->update([
                'status' => 1
            ]
        );

        return redirect()->route('contact.index')->with(['success' => "Email sent successfully !"]);

    }
}
