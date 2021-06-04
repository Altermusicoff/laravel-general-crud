<?php

use App\myMatch;
use Illuminate\Database\Seeder;

class myMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(myMatch::class,50)->create();
    }
}
