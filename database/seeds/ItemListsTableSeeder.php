<?php

use Illuminate\Database\Seeder;
use App\ItemList;
use App\User;

class ItemListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemLists = [
            ["Movies I Want to Watch", "Citizen Kane", "0"],
            ["Movies I Want to Watch", "Umberto D", "1"],
            ["Books I Want to Read", "Catcher in the Rye", "0"],
        ];

        $user = User:: first();
        foreach ($itemLists as $key => $itemListData) {
            $itemList = new ItemList();

            $itemList->user_id = $user->id;
            $itemList->title = $itemListData[0];
            $itemList->item = $itemListData[1];
            $itemList->checked = $itemListData[2];

            $itemList->save();
        }
    }
}
