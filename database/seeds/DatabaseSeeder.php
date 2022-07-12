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

        $skills = [
            'COOKING','SEWING','BAKING','MANAGEMENT','PASTRY','OTHER'
        ];
        foreach ($skills as $skill){
            Skill::create (['skillName'=>$skill]);
        }
    }
}
