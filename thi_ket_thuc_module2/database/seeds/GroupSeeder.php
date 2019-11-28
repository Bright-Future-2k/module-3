<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group();
        $group->name = 'quan tri he thong';
        $group->save();

        $group = new Group();
        $group->name = 'quan ly nhan su';
        $group->save();

        $group = new Group();
        $group->name = 'le tan';
        $group->save();

        $group = new Group();
        $group->name = 'quan ly phong';
        $group->save();

        $group = new Group();
        $group->name = 'quan ly dich vu';
        $group->save();
    }
}
