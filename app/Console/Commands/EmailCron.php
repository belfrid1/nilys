<?php

namespace App\Console\Commands;

use App\Helper\EmailSenderHelper;
use App\Http\Controllers\Mail\MailController;
use App\Models\Contact;
use App\Models\SettingEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
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
            // send email & save in Database
            $emailSendReponse = EmailSenderHelper::sendTo($contacts);
            if ($emailSendReponse["reponse"]) {
                $contacts->update(["status" => "1"]);
            } else {
                Log::info($emailSendReponse["detail"]["error"]);
            }
        }
    }
}
