<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use App\Models\PopupGroup;
use App\Models\SettingApi;
use App\Models\SettingEmail;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {

        $setting_mail = SettingEmail::latest()->first();
        $setting_api = SettingApi::latest()->first();

        return view('back.setting.index', compact('setting_mail', 'setting_api'));
    }

    public function editSettingMail(Request $request)
    {

        $setting_mail = SettingEmail::latest()->first();

        //$content = strip_tags($request->mail_content);
        $content = $request->mail_content;
        if ($setting_mail) {
            $setting_mail->update(
                [
                    'subject' => $request->subject,
                    'content' => $content,
                    'apikey' => $request->apikey,
                    'secretkey' => $request->secretkey,
                    'host' => $request->host,
                    'port' => $request->port,
                    'username' => $request->username,
                    'password' => $request->password,
                    'from_address' => $request->from_address,
                ]
            );

            $setting_api = $this->getSettingApi();
            return view('back.setting.index', compact('setting_mail', 'setting_api'))->with(['success' => "Email settings updated successfully"]);
        } else {
            $content = $request->mail_content;

            $setting_mail = SettingEmail::create([
                'subject' => $request->subject,
                'content' => $content,
                'apikey' => $request->apikey,
                'secretkey' => $request->secretkey,
                'host' => $request->host,
                'port' => $request->port,
                'username' => $request->username,
                'password' => $request->password,
                'from_address' => $request->from_address,

            ]);

            $setting_api = $this->getSettingApi();
            return view('back.setting.index', compact('setting_mail', 'setting_api'))->with(['success' => "Email settings created successfully"]);
        }
    }
    public function editSettingApi(Request  $request)
    {
        $setting_api = SettingApi::latest()->first();

        if ($setting_api) {
            $setting_api->update(
                [
                    'website_url' => $request->website_url,
                ]
            );
        } else {
            $setting_api = SettingApi::create([
                'website_url' => $request->website_url,

            ]);
        }

        $setting_mail = $this->getSettingMail();
        return view('back.setting.index', compact('setting_api', 'setting_mail'));
    }


    private function getSettingMail()
    {

        $setting_mail = SettingEmail::latest()->first();

        if ($setting_mail) {
            return $setting_mail;
        } else {
            return new SettingEmail();
        }
    }

    private function getSettingApi()
    {

        $setting_api = SettingApi::latest()->first();

        if ($setting_api) {
            return $setting_api;
        } else {
            return new SettingApi();
        }
    }
}
