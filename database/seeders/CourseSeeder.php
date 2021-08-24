<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $courses = [
            ['Physical Computing','phycom'],
            ['Basic Electronics','basele'],
            ['Advance Electronics','advele']
        ];

        foreach ($courses as $course) {
            \App\Models\Course::create([
                'name' => $course[0],
                'slug' => $course[1]
            ]);
        }
    }
}
