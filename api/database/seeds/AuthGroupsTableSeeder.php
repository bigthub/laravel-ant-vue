<?php

use Illuminate\Database\Seeder;

class AuthGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('auth_groups')->delete();
        
        \DB::table('auth_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'roles' => 'admin',
                'introduction' => '超级管理员',
                'created_at' => '2019-03-24 08:00:00',
                'updated_at' => '2019-05-25 05:42:07',
            ),
            1 => 
            array (
                'id' => 2,
                'roles' => 'edits',
                'introduction' => '编辑人员',
                'created_at' => '2019-04-17 18:23:12',
                'updated_at' => '2019-04-17 18:23:12',
            ),
        ));
        
        
    }
}