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
        $now = Carbon::now();
        $days = new Carbon($year.'-'.$month.'-'.$day);
        $number = $days->daysInMonth;

        for ($day = 1; $day < $number; $day++) {
            $dates[] = new Carbon($year.'-'.$month.'-'.$day);
        }

        return view('works.index', compact('dates','week','now'));
    }

    public function create()
    {
        $now = Carbon::now()->format('Y-m-d');
        return view('works.create', compact('now'));
    }

    public function store(Request $request)
    {
        $work = new Work();
        $work->user_id = 4;
        $work->work_content = $request->work_content;
        $work->comment = $request->comment;
        $work->date = $request->date;
        $work->work_start_time = "$request->startH:$request->startM:00";
        $work->work_end_time = "$request->endH:$request->endM:00";
        $work->break_time = "$request->breakH:$request->breakM:00";
        $work->status_id = 1;
        $work->deleted_at = Carbon::now();
        $work->save();

        return redirect()->route('works.create')
                ->with('message', '登録が完了しました。');
    }
}
