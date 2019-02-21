<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\User;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            ["2019-02-18", "11:00", "14:00", "Aenean eu mollis"],
            ["2019-02-18", "15:00", "19:00", "Nullam nisl"],
            ["2019-02-17", "8:00", "11:00", "Quisque porta ex"],
        ];

        $user = User:: first();
        foreach ($events as $key => $eventData) {
            $event = new Event();

            $event->user_id = $user->id;
            $event->date = $eventData[0];
            $event->start_time = $eventData[1];
            $event->end_time = $eventData[2];
            $event->title = $eventData[3];

            $event->save();
        }
    }
}
