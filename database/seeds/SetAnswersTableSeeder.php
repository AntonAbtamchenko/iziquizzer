<?php

use Illuminate\Database\Seeder;
use App\Models\Question;

/**
 * Class SetAnswersTableSeeder
 */
class SetAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = Question::all();

        $questions->each(function (Question $question) {
            $correctAnswer = $question
                ->answers
                ->shuffle()
                ->first();

            if ($correctAnswer) {
                $correctAnswer
                    ->update(['is_correct' => true]);
            }
        });
    }
}
