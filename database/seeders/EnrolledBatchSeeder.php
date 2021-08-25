<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrolledBatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $batchcount = DB::table('batches')->count();
        for ($i = 1; $i <= 5; $i++) {
            
            DB::table('enrolledbatches')->insert([
                'batch' => rand(1, $batchcount),
                'user_id' => $i,
            ]);
        }
        }

}
