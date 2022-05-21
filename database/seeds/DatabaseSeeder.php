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
        //$this->call(DaySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(AdminsTableSeeder::class);

        
    }
}