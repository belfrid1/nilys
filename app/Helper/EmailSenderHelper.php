<?php

namespace App\Helper;

use App\Models\Contact;
use App\Models\SettingEmail;
use Mailjet\Resources;

class EmailSenderHelper
{


    public static function sendTo($contacts)
    {
        $sendStatut = ["reponse" => false, "detail" => null];
        $settingEmail = SettingEmail::latest()->first();
        $contactList = null;

        $contactList = self::formatContact($contacts->get());


        if ($settingEmail) {
            try {
                $mj = new \Mailjet\Client($settingEmail->apikey, $settingEmail->secretkey, true, ['version' => 'v3.1']);

                $body = [
                    'Messages' => [
                        [
                            'From' => [
                                'Email' => $settingEmail->username,
                                'Name' => $settingEmail->from_address
                            ],
                            'To' => $contactList,
                            'Subject' => $settingEmail->subject,
                            'TextPart' => $settingEmail->content,
                            'HTMLPart' => $settingEmail->content
                        ]
                    ]
                ];

                // All resources are located in the Resources class
                $response = $mj->post(Resources::$Email, ['body' => $body]);

                // Read the response
                if ($response->success() && $response->getData()) {
                    for($i = 0;$i< sizeof($contactList); $i++){
                        $contact = Contact::where('email',$contactList[$i]['Email']);
                        $contact->update([
                            'status' => true
                        ]);
                    }
                    $sendStatut["reponse"] = true;
                    $sendStatut["detail"] = ['success' => "Email sent successfully !"];
                }
            } catch (\Exception $e) {
                $sendStatut["detail"] = ['error' => $e];
            }
        } else {
            $sendStatut["detail"] =  ['error' => "Please define a default content email and subjet"];
        }

        return $sendStatut;
    }


    public static function formatContact($contacts)
    {
        $contactList = [];
        foreach ($contacts as $contact) {
            array_push($contactList, ['Email' => $contact->email, 'Name' => $contact->firstname]);
        }
        return $contactList;
    }
}
