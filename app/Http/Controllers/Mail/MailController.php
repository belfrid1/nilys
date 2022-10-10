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

        $settingEmail = SettingEmail::latest()->first();

        if(!$settingEmail){
            return redirect()->route('contact.index')->with(['error' => "Please define a default content email and subjet"]);
        }


        $subject = $settingEmail->subject;
        $content = $settingEmail->content;
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

         $editcontact = $contact->update([
                'status' => true
            ]
        );



        return redirect()->route('contact.index')->with(['success' => "Email sent successfully !"]);

    }
}
