<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Models\SettingEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Email adresse who not receive newsletter
        $contacts = Contact::where(["status" => 0]);
        if ($contacts->count() > 0) {
            $notReceivedEmailList = $contacts->pluck("email")->toArray();

            $emailSetting = SettingEmail::first();
            $details = [
                'subject' => $emailSetting->subject,
                'body' => $emailSetting->content,
                'notReceivedEmailList' => $notReceivedEmailList
            ];

            // send email
            Mail::send([], [], function ($message) use ($details) {
                $message->to($details["notReceivedEmailList"])
                    ->subject($details["subject"])
                    ->setBody($details["body"])
                    ->setBody($details["body"], 'text/html');
            });

            // save email send, statut
            $contactReceived = new Contact();
            $contactReceived->update(["status" => 1], ["whereIn" => implode(",", $notReceivedEmailList)]);
        }
    }
}
