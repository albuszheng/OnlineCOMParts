<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('c_p_us')->insert([
            'Name' => str_random(10),
            'Manufacturer' => str_random(10).'@gmail.com',
            'OperatingFrenquency' => bcrypt('secret'),
            'Cores' => bcrypt('secret'),
            'ThermalDesignPower' => bcrypt('secret'),
        ]);
    }
}
