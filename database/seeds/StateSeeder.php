<?php

use Illuminate\Database\Seeder;
use App\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['id' => '1' ,'stateName' => 'JOHOR'],
            ['id' => '2' ,'stateName' => 'KEDAH'],
            ['id' => '3' ,'stateName' => 'KELANTAN'],
            ['id' => '4' ,'stateName' => 'KUALA LUMPUR'],
            ['id' => '5' ,'stateName' => 'LABUAN'],
            ['id' => '6' ,'stateName' => 'MELAKA'],
            ['id' => '7' ,'stateName' => 'NEGERI SEMBILAN'],
            ['id' => '8' ,'stateName' => 'PAHANG'],
            ['id' => '9' ,'stateName' => 'PENANG'],
            ['id' => '10' ,'stateName' => 'PERAK'],
            ['id' => '11' ,'stateName' => 'PERLIS'],
            ['id' => '12' ,'stateName' => 'PUTRAJAYA'],
            ['id' => '13' ,'stateName' => 'SABAH'],
            ['id' => '14' ,'stateName' => 'SARAWAK'],
            ['id' => '15' ,'stateName' => 'SELANGOR'],
            ['id' => '16' ,'stateName' => 'TERENGGANU'],

        ];
        foreach ($data_seeds as $seed) {
            State ::firstOrCreate ($seed);
        }
    }
}
