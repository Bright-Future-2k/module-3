<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->Name = 'Mr.Brown';
        $admin->Address = '21 to huu';
        $admin->Number = '0943253245';
        $admin->Image = 'a.jpg';
        $admin->save();
    }
}
