<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

/**
 * User factory
 */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/**
 * Quiz factory
 */
$factory->define(App\Models\Quiz::class, function (Faker\Generator $faker) {
    static $users;

    if (is_null($users)) {
        $users = DB::table('users')->pluck('id');
    }

    return [
        'title' => $faker->title,
        'user_id' => $users->shuffle()->first(),
        'excerpt' => $faker->text(),
    ];
});

/**
 * Question factory
 */
$factory->define(App\Models\Question::class, function (Faker\Generator $faker) {
    static $quizzes;

    if (is_null($quizzes)) {
        $quizzes = DB::table('quizzes')->pluck('id');
    }

    return [
        'label' => rand(0, 9),
        'body' => $faker->text(50),
        'quiz_id' => $quizzes->shuffle()->first(),
    ];
});

/**
 * Answer factory
 */
$factory->define(App\Models\Answer::class, function (Faker\Generator $faker) {
    static $questions;

    if (is_null($questions)) {
        $questions = DB::table('questions')->pluck('id');
    }

    $questionId = $questions->shuffle()->first();

    return [
        'label' => collect(['A', 'B', 'C', 'D', 'O', 'F'])->shuffle()->first(),
        'body' => $faker->text(50),
        'question_id' => $questionId,
        'is_correct' => false
    ];
});
