<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'SUPERADMIN',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:14:14',
                'updated_at' => '2022-09-14 10:34:55',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'USER',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 11:52:31',
                'updated_at' => '2022-09-14 11:52:31',
            ),
        ));
        
        
    }
}