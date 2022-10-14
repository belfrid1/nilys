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
        $getRegistrantByGroup = $this->getRegistrantByGroup();


        return view('back.dashboard', compact(['data'],['registrationsByDay'],['getRegistrantByGroup']));
    }

    public function getRegistrations(){

       // stat on 2 weeks
       $interval = 14 ;
        $registrationsByDay = [];
        $y = [];
        $x = [];
        $registrationsByDay = [];
       for($i= 0; $i <= $interval;$i++){
           $date = Carbon::today()->modify('-'.$i.' day');
           $nbContactForDate = Contact::whereDate('created_at', $date)->get()->count();
           $registrationsByDay[$date->format('Y-m-d')] = $nbContactForDate;
            $y[] =  $nbContactForDate ;
           $x[] = $date->format('Y-m-d');

       }
        $todaydate = Carbon::today();
        $nbContactForDate = Contact::whereDate('created_at', $todaydate)->get()->count();

       $x = array_values($x);
//       $x = ["2022-01-45", "2002-78-566", "vol"];
//       $absisse = "ddedfefef";
//        $x = ['81 AM', '9 AM', '10 AM', '11 AM', '12 PM'];
//        $x = [ 90, 80, 80, 80, 60, 60, 50];
//        $y = "je suis la variable string";

       return $registrationsByDay = ['x'=>$x, 'y'=> $y, 'today' =>$nbContactForDate ];
    }
    public function getRegistrantByGroup(){

        $groups = PopupGroup::all();
        $x = [];
        $y = [];
        foreach ($groups as $group){
            $x[] = $group->name ;
            $y[] = Contact::where('popupgroup_guid', $group->guid)->get()->count();
        }
        $xGroup = array_values($x);
        $yGroup = array_values($y);
        $nbContactTodayGroup = [];
        return $getRegistrantByGroup = ['x'=>$xGroup, 'y'=> $yGroup, 'today' =>$nbContactTodayGroup  ];
    }
}
