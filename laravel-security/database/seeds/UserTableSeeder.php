<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'adminUser';
        $user->email = 'admin@gmail.com';
        $user->password =Hash::make( '123456');
        $user->admin = 1;
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('123456');
        $user->admin = 0;
        $user->save();
    }
}
