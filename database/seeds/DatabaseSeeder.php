<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ItemListsTableSeeder::class);
        $this->call(ThoughtsTableSeeder::class);
        $this->call(ToDosTableSeeder::class);
    }
}
