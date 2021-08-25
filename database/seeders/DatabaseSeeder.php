<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Add your seeders here
        $this->call(UserSeeder::class);
        $this->call(DemoStudentSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(BatchSeeder::class);
        $this->call(EnrolledBatchSeeder::class);
    }
}
