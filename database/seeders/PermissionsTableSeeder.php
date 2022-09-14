<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'permission-create',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:01:54',
                'updated_at' => '2022-09-14 09:01:54',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'permission-edit',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:01:54',
                'updated_at' => '2022-09-14 09:01:54',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'permission-delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:01:54',
                'updated_at' => '2022-09-14 09:01:54',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'permission-index',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:03:14',
                'updated_at' => '2022-09-14 09:03:14',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'role-index',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:12:16',
                'updated_at' => '2022-09-14 09:12:16',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'role-create',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:12:16',
                'updated_at' => '2022-09-14 09:12:16',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'role-edit',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:12:16',
                'updated_at' => '2022-09-14 09:12:16',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'role-delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:12:16',
                'updated_at' => '2022-09-14 09:12:16',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'admin-index',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:34:39',
                'updated_at' => '2022-09-14 09:34:39',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'admin-create',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:34:39',
                'updated_at' => '2022-09-14 09:34:39',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'admin-edit',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:34:39',
                'updated_at' => '2022-09-14 09:34:39',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'admin-delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 09:34:39',
                'updated_at' => '2022-09-14 09:34:39',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'status_laporan-index',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:17:54',
                'updated_at' => '2022-09-14 10:17:54',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'status_laporan-create',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:17:54',
                'updated_at' => '2022-09-14 10:17:54',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'status_laporan-edit',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:17:54',
                'updated_at' => '2022-09-14 10:17:54',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'status_laporan-delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:17:54',
                'updated_at' => '2022-09-14 10:17:54',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'laporan-index',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:18:14',
                'updated_at' => '2022-09-14 10:18:14',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'laporan-edit',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:18:14',
                'updated_at' => '2022-09-14 10:18:14',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'laporan-delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:18:14',
                'updated_at' => '2022-09-14 10:18:14',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'laporan-create',
                'guard_name' => 'web',
                'created_at' => '2022-09-14 10:18:14',
                'updated_at' => '2022-09-14 10:18:14',
            ),
        ));
        
        
    }
}