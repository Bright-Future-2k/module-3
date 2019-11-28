<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new Room();
        $room->name = 'Phong Maketing';
        $room->save();

        $room = new Room();
        $room->name = 'Phong ke toan';
        $room->save();

        $room = new Room();
        $room->name = 'Phong tu van';
        $room->save();

        $room = new Room();
        $room->name = 'Phong tuyen truyen';
        $room->save();

        $room = new Room();
        $room->name = 'Phong su kien';
        $room->save();
    }
}
