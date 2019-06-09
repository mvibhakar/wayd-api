<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\ToDo;
use App\Thought;

class DayController extends Controller
{
    // date looks like YYYY-MM-DD
    public function dateData(Request $request, $date)
    {
        $events = Event::where('user_id', $request->user())->whereDate('date', $date)->get();
        $todos = ToDo::whereDate('date', $date)->get();
        $thoughts = Thought::whereDate('date', $date)->get();

        return ([
            'events' => $events,
            'todos' => $todos,
            'thoughts' => $thoughts
        ]);
    }
}
