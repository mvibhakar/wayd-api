<?php

use Illuminate\Database\Seeder;
use App\Thought;
use App\User;

class ThoughtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thoughts = [
            ["2019-02-18", "Ut eu erat bibendum ex venenatis faucibus. Phasellus ultrices tempus tortor vel consectetur. Mauris vestibulum lacus ipsum, nec consectetur ex blandit id. Proin ac auctor lectus. In vitae pulvinar felis. Quisque bibendum laoreet lacus, ut molestie magna porttitor vel."],
            ["2019-02-17", "Sed quis ligula ultricies, cursus ante quis, consectetur risus. In auctor augue sit amet nisi lobortis, sed tempus nunc finibus. Integer vulputate pretium fringilla. Phasellus lobortis malesuada efficitur. Nam scelerisque scelerisque sodales. Duis feugiat, mi quis porta rutrum, libero enim lobortis libero, eu euismod nibh diam sed felis. Suspendisse potenti. Maecenas lacinia erat vitae mattis rutrum. Aliquam quis congue neque, vitae efficitur elit. Duis ante erat, varius sed tincidunt sed, mattis sed felis."],
        ];

        $user = User:: first();
        foreach ($thoughts as $key => $thoughtData) {
            $thought = new Thought();

            $thought->user_id = $user->id;
            $thought->date = $thoughtData[0];
            $thought->content = $thoughtData[1];
            
            $thought->save();
        }
    }
}
