<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminAuthGroupTableSeeder::class);
        $this->call(AdminLogsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AuthGroupAuthRulesTableSeeder::class);
        $this->call(AuthGroupsTableSeeder::class);
        $this->call(AuthRulesTableSeeder::class);
    }
}
