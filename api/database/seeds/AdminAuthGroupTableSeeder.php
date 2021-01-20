<?php

use Illuminate\Database\Seeder;

class AdminAuthGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_auth_group')->delete();
        
        \DB::table('admin_auth_group')->insert(array (
            0 => 
            array (
                'admin_id' => 1,
                'auth_group_id' => 1,
            ),
            1 => 
            array (
                'admin_id' => 2,
                'auth_group_id' => 2,
            ),
        ));
        
        
    }
}