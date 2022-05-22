<?php

use Illuminate\Database\Seeder;
use App\Skill;
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
       // $this->call(StateSeeder::class);
       // $this->call(AdminsTableSeeder::class);

        $skillNeed = [
            'COOKING','SEWING','BAKING','MANAGEMENT','PASTRY'
        ];
        foreach ($skillNeed as $skill){
            Skill::create (['skillName'=>$skill]);
        }
    }
}
