<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'avatarboy763@gmail.com';
        $user->password = Hash::make('anhanhanh9x');
        $user->admin = 1;
        $user->save();

    }
}
