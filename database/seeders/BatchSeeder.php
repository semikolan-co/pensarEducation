<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $batches = [
        ['Morning Batch','phycom','Mentor Name','09:00','10:00'],
        ['Noon Batch','phycom','Mentor Name','14:00','15:00'],
        ['Evening Batch','phycom','Mentor Name','18:00','19:00'],
        ['Morning Batch','basele','Mentor Name','09:00','10:00'],
        ['Noon Batch','basele','Mentor Name','14:00','15:00'],
        ['Evening Batch','basele','Mentor Name','18:00','19:00'],
        ['Morning Batch','advele','Mentor Name','09:00','10:00'],
        ['Noon Batch','advele','Mentor Name','14:00','15:00'],
        ['Evening Batch','advele','Mentor Name','18:00','19:00'],
      ];

      foreach ($batches as $batch) {
        \App\Models\Batch::create([
          'name' => $batch[0],
          'course' => $batch[1],
          'mentor' => $batch[2],
          'starttime' => $batch[3],
          'endtime' => $batch[4],
        ]);
      }
      

            

    }
}
