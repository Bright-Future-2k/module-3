<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomerTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->name = 'john';
        $customer->dob = '2018-09-26';
        $customer->email = 'customer1@gmail.com';
        $customer->city_id = 1;
        $customer->save();

        $customer = new Customer();
        $customer->id = 2;
        $customer->name = 'peter';
        $customer->dob = '2018-02-12';
        $customer->email = 'customer1@gmail.com';
        $customer->city_id = 1;
        $customer->save();

        $customer = new Customer();
        $customer->id = 3;
        $customer->name = 'brown';
        $customer->dob = '2018-10-19';
        $customer->email = 'customer1@gmail.com';
        $customer->city_id = 2;
        $customer->save();

    }
}
