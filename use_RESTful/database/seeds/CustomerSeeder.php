<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->first_name = 'Tuan';
        $customer->last_name = 'Nguyen';
        $customer->save();
    }
}
