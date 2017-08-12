<?php

use Illuminate\Database\Seeder;

/**
 * Class QuizzesTableSeeder
 */
class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Quiz::class, 60)->create();
    }
}
