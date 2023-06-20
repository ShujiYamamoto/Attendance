<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $dates = [];
        $week = array('日','月','火','水','木','金','土');
        (int)$year = $request->year;
        (int)$month = $request->month;
        $day = 1;
        $days = new Carbon($year.'-'.$month.'-'.$day);
        $number = $days->daysInMonth;

        for ($day = 1; $day < $number; $day++) {
            $dates[] = new Carbon($year.'-'.$month.'-'.$day);
        }

        return view('works.index', compact('dates','week'));
    }

    public function create()
    {
        return view('works.create');
    }
}
