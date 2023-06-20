<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DatesController extends Controller
{
    public function index()
    {
        $dates = [];
        $week = array('日','月','火','水','木','金','土');
        $year = date(2023);
        $month = date(6);
        $day = 1;
        $days = new Carbon($year.'-'.$month.'-'.$day);
        $number = $days->daysInMonth;

        for ($day = 1; $day < $number; $day++) {
            $dates[] = new Carbon($year.'-'.$month.'-'.$day);
        }

        return view('works.index', compact('dates','week'));
    }
}
