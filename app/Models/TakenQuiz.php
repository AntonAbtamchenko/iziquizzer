<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TakenQuiz
 *
 * @property int $id
 * @property int $status
 * @property int $user_id
 * @property int $quiz_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TakenQuiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TakenQuiz whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TakenQuiz whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TakenQuiz whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TakenQuiz whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TakenQuiz whereUserId($value)
 * @mixin \Eloquent
 */
class TakenQuiz extends Model
{
    //
}
