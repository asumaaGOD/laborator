<?php

use Illuminate\Database\Seeder;
use App\jishee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(jishee::class, 15 )->create();
    }
}
