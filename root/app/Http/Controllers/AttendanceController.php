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
        (int)$year = 2023;
        (int)$month = 6;
        $day = 1;
        $value = Carbon::now();
        $days = new Carbon($year.'-'.$month.'-'.$day);
        $number = $days->daysInMonth;

        for ($day = 1; $day < $number; $day++) {
            $dates[] = new Carbon($year.'-'.$month.'-'.$day);
        }

        return view('works.index', compact('dates','week'));
    }

    public function create()
    {
        $now = Carbon::now()->format('Y-m-d');
        return view('works.create', compact('now'));
    }
}
