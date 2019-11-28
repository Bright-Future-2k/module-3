<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->id = 1;
        $city->name = 'Ha Noi';
        $city->save();

        $city = new City();
        $city->id=2;
        $city->name = 'Hai Phong';
        $city->save();

        $city = new City();
        $city->id=3;
        $city->name = 'Nam Dinh';
        $city->save();

    }
}
