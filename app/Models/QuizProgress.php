<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QuizProgress
 *
 * @property int $id
 * @property int $taken_quiz_id
 * @property int $answer_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuizProgress whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuizProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuizProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuizProgress whereTakenQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuizProgress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuizProgress extends Model
{
    //
}
