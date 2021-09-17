<?php

use Illuminate\Database\Seeder;

class XwsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Xws::class,1000)->create();
    }
}
