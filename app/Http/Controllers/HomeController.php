<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Domain;
use App\Models\Popup;
use App\Models\PopupGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $domainLastAddCount = count(Domain::where('created_at', '>=', Carbon::now()->subdays(15))->get());
        $domainLastUpdateCount = count(Domain::where('updated_at', '>=', Carbon::now()->subdays(15))->get());
        $data["domainsCount"] = count(Domain::all());
        $data["domainsLastUpdateCount"] = $domainLastUpdateCount;
        $data["domainsLastAddCount"] = $domainLastAddCount;

        $contactLastAddCount = count(Contact::where('created_at', '>=', Carbon::now()->subdays(15))->get());
        $contactLastUpdateCount = count(Contact::where('updated_at', '>=', Carbon::now()->subdays(15))->get());
        $data["contactsLastUpdateCount"] = $contactLastUpdateCount;
        $data["contactsLastAddCount"] = $contactLastAddCount;
        $data["contactsCount"] = count(Contact::all());


        $groupLastAddCount = count(PopupGroup::where('created_at', '>=', Carbon::now()->subdays(15))->get());
        $groupLastUpdateCount = count(PopupGroup::where('updated_at', '>=', Carbon::now()->subdays(15))->get());
        $data["groupsCount"] = count(PopupGroup::all());
        $data["groupsLastUpdateCount"] = $groupLastUpdateCount;
        $data["groupsLastAddCount"] = $groupLastAddCount;

        $popupLastAddCount = count(Popup::where('created_at', '>=', Carbon::now()->subdays(15))->get());
        $popupLastUpdateCount = count(Popup::where('updated_at', '>=', Carbon::now()->subdays(15))->get());
        $data["popupsCount"] = count(Popup::all());
        $data["popupsLastUpdateCount"] = $popupLastUpdateCount;
        $data["popupsLastAddCount"] = $popupLastAddCount;

        $registrationsByDay = $this->getRegistrations();


        return view('back.dashboard', compact(['data'],['registrationsByDay']));
    }

    public function getRegistrations(){

       $today = now();
       $nbContact = Contact::where('created_at',$today)->count();

       return $registrationsByDay = ['today'=>$nbContact];
    }
}
