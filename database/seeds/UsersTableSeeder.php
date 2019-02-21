<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ["Bob", "babs@gmail.com", "asdf"],
        ];

        foreach ($users as $key => $userData) {
            $user = new User();

            $user->first_name = $userData[0];
            $user->email = $userData[1];
            $user->password = $userData[2];

            $user->save();
        }
    }
}
