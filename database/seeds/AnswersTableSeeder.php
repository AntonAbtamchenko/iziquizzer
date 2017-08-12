<?php

use Illuminate\Database\Seeder;

/**
 * Class AnswersTableSeeder
 */
class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Answer::class, 1500)->create();
    }
}
