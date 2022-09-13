<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PENDING',
                'color' => 'warning',
                'created_at' => '2022-09-13 06:38:40',
                'updated_at' => '2022-09-13 06:38:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PROSES',
                'color' => 'info',
                'created_at' => '2022-09-13 06:39:14',
                'updated_at' => '2022-09-13 06:39:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SELESAI',
                'color' => 'success',
                'created_at' => '2022-09-13 06:39:24',
                'updated_at' => '2022-09-13 06:39:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'DITOLAK',
                'color' => 'danger',
                'created_at' => '2022-09-13 06:39:40',
                'updated_at' => '2022-09-13 06:39:40',
            ),
        ));
        
        
    }
}