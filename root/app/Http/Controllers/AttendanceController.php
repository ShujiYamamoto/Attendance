<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\work;

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

    public function store()
    {
        $work = new Work();
        // $work->id = 2;
        $work->user_id = 2;
        $work->work_content = 'テスト';
        $work->comment = 'テスト';
        $work->date = '2023-06-21';
        $work->work_start_time = 8;
        $work->work_end_time = 18;
        $work->break_time = 1;
        $work->status_id = 1;
        $work->deleted_at = Carbon::now();
        $work->save();

        return view('works.index');
    }
}
