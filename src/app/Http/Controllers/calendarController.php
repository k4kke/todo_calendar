<?php

namespace App\Http\Controllers;
use App\sh;
use App\Calendar\CalendarView;
use Illuminate\Http\Request;

class calendarController extends Controller
{
    public function index()  
    {
        return view("Calendar/index");  
    }

    public function show(){
		
		$calendar = new CalendarView(time());

		return view('Calendar/index', [
			"calendar" => $calendar
		]);
	}
    public function edit()
    {
        return view('Calendar/edit');
    }
    public function create()
    {
        return view('Calendar/create');
    }
    
}
