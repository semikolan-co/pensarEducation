<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admins = [
            ['Pranay Das','contact@pensaredu.com','thisisrandompasswordforpensareducation']
        ];
        foreach ($admins as $key => $value) {
            \App\Models\User::create([
                'name' => $value[0],
                'email' => $value[1],
                'role_id' => 0,
                'password' => bcrypt($value[2]),
            ]);
        }
    

        $students = [
            ['Student 01','student01@gmail.com','password','9','5','Parent Name 01','parent01@gmail.com','1234567890'], 
            ['Student 02','student02@gmail.com','password','10','6','Parent Name 02','parent02@gmail.com','1234567890'], 
            ['Student 03','student03@gmail.com','password','11','7','Parent Name 03','parent03@gmail.com','1234567890'], 
            ['Student 04','student04@gmail.com','password','12','8','Parent Name 04','parent04@gmail.com','1234567890'], 
            ['Student 05','student05@gmail.com','password','13','9','Parent Name 05','parent05@gmail.com','1234567890']
        ];

        foreach ($students as $key => $value) {
            \App\Models\User::create([
                'name' => $value[0],
                'email' => $value[1],
                'role_id' => 1,
                'password' => bcrypt($value[2]),
                'kidage'=> $value[3],
                'kidclass'=> $value[4],
                'parentname'=> $value[5],
                'parentemail'=> $value[6],
                'parentphone'=> $value[7]
            ]);
        }

    }
}
