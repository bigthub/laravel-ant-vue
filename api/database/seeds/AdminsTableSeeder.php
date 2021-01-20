<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'cellphone' => '13333333333',
                'password' => '$2y$10$nxcmBpwq2/0d4QKom9ZevuxmJlZ4dBi12Uyn2V65e2rBtnXYq49.q',
                'portrait' => 'https://dsshop.dswjcms.com/storage/image/portrait/4dq8h1607946382.png',
                'time' => '2020-08-01 08:00:00',
                'last_login_at' => '2021-01-19 20:54:30',
                'created_at' => '2020-08-01 20:56:32',
                'updated_at' => '2021-01-19 20:54:30',
            ),
            1 => 
            array (
                'id' => 2,
                'state' => 1,
                'name' => 'abcd12345',
                'email' => 'abcd12345@123.com',
                'cellphone' => '13333333334',
                'password' => '$2y$10$jEUYHRTGofk5h3ZuS.BiCewYU3/zLxBuMtS8.Qchu2l2RMd6BT5h2',
                'portrait' => 'https://dsshop.dswjcms.com/storage/image/portrait/4dq8h1607946382.png',
                'time' => '2020-08-01 18:10:37',
                'last_login_at' => '2020-08-01 18:10:37',
                'created_at' => '2020-08-01 18:10:37',
                'updated_at' => '2020-08-01 10:23:05',
            ),
        ));
        
        
    }
}