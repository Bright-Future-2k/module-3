<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->name = 'John';
        $student->age = 23;
        $student->address = '21 tran phu';
        $student->save();

        $student = new Student();
        $student->name = 'Nam';
        $student->age = 44;
        $student->address = '21 quang trung';
        $student->save();

        $student = new Student();
        $student->name = 'Phong';
        $student->age = 20;
        $student->address = '21 le loi';
        $student->save();
    }
}
