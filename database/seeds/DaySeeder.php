<?php

use Illuminate\Database\Seeder;
use App\Day;
class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['id' => '1' ,'dayName' => 'Monday'],
            ['id' => '2' ,'dayName' => 'Tuesday'],
            ['id' => '3' ,'dayName' => 'Wednesday'],
            ['id' => '4' ,'dayName' => 'Thursday'],
            ['id' => '5' ,'dayName' => 'Friday'],
            ['id' => '6' ,'dayName' => 'Saturday'],
            ['id' => '7' ,'dayName' => 'Sunday'],

        ];
        foreach ($data_seeds as $seed) {
            Day ::firstOrCreate ($seed);
        }
    }
}
