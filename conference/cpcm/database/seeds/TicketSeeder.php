<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tickets')->insert([
            'id' => '1',
            'catagory' => 'Local',
            'price' => '1000',
            'type' => 'Normal',
        ]);


    }
}
