<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;

class CalendarController extends Controller
{
    public function show(Request $request){
        
        $date = $request->input("date");
        
        if($date && preg_match("/^[0-9]{4}-[0-9]{2}$/",$date)){
            $date = strtotime($date . "-02");
        }else{
            $date = null;
        }
        
        if(!$date) $date = time();
        
        $calendar = new CalendarView($date);
        
        return view('calendar',[
                "calendar" => $calendar
            ]);
    }
}
