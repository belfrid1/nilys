<?php

namespace App\Http\Controllers\Mail;

use App\Helper\EmailSenderHelper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\SettingEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Mailjet\Resources;

class MailController extends Controller
{

    public function sendMail($contactId)
    {
        $contact = Contact::where(["id" => $contactId]);
        $emailSendReponse = EmailSenderHelper::sendTo($contact);
        return  redirect()->route('contact.index')->with($emailSendReponse["detail"]);
    }
}
