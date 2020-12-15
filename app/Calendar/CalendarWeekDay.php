<?php
namespace App\Calendar;
use Carbon\Carbon;

class CalendarWeekDay{
    protected $carbon;
    
    function __construct($date){
        $this->carbon = new Carbon($date);
    }
    
    function getClassName(){
        return "day-" . strtolower($this->carbon->format("D")); //day-sun,day-monなどを取得
    }
    
    function isToday(){
        $dt = Carbon::now();
        if($dt->format("Y-m-d") == $this->carbon->format("Y-m-d")){
            return True;
        }else{
            return False;
        }
    }
    
    function render(){
       return '<span class="day">' . $this->carbon->format("j") . '</span><br>' .  link_to_route('write.get','日記を書く',['date' => $this->carbon->format("Y-m-d")],[]) . '<br>' .link_to_route('read.get','日記を読む',['date' => $this->carbon->format("Y-m-d")],[]); //0なしの日付を取得
    }
}