<?php

use Illuminate\Database\Seeder;

class AdminLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_logs')->delete();

        \DB::table('admin_logs')->insert(array (

        ));


    }
}
