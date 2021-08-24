<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //foreach loop for 10 times
        for ($i = 1; $i < 10; $i++) {
            //create a new student
            \App\Models\DemoStudent::create([
                'name' => "Student 0".$i,
                'email' => "student0".$i."@gmail.com",
                'kidage'=> 8+$i,
                'kidclass'=> 4+$i,
                'parentname'=> "Parent 0".$i,
                'parentemail'=> "parent0".$i."@gmail.com",
                'parentphone'=> "1234567890",
                'status'=> $i<=5 ? 1 : 0
            ]);
    }
}
}
