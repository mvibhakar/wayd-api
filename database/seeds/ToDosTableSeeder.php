<?php

use Illuminate\Database\Seeder;
use App\ToDo;
use App\User;

class ToDosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todos = [
            ["2019-02-18", "Cras metus ligula", "1"],
            ["2019-02-17", "Pellentesque blandit in erat", "0"],
            ["2019-02-17", "Duis elementum", "0"],
        ];

        $user = User:: first();
        foreach ($todos as $key => $todoData) {
            $todo = new ToDo();

            $todo->user_id = $user->id;
            $todo->date = $todoData[0];
            $todo->title = $todoData[1];
            $todo->checked = $todoData[2];
            
            $todo->save();
        }
    }
}
