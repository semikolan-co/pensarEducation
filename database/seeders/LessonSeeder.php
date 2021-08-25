<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class LessonSeeder extends Seeder
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
        $limit = 45;
        $topicount =\App\models\Topic::count();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('lessons')->insert([ 
                'name' => $faker->name,
                'topic' => rand(0,$topicount),
                'pdflink'=>$faker->url,
                'videolink'=>$faker->url,
                'quizdata'=> '[{"type":"mcq","correct":"2","question":"Prashan Kramank Ek","options":["rf","wer","wwr"]},{"type":"mcq","correct":"0","question":"wrr","options":["wewr","werwer"]}]'
            ]);
        }



    }
}
