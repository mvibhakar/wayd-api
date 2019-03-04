<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\ToDo;
use App\Thought;

class DayController extends Controller
{
    public function index()
    {
        $events = Event::get();
        $todos = ToDo::get();
        $thoughts = Thought::get();

        return ([
            'events' => $events,
            'todos' => $todos,
            'thoughts' => $thoughts
        ]);
    }
}
