<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            
        $faker = Faker::create();
        $courses = ['phycom','basele','advele'];
        $limit = 15;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('topics')->insert([ 
                'name' => $faker->name,
                'course' => $courses[array_rand($courses)]
            ]);
        }




    }
}
