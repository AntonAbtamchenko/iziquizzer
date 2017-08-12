<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Answer
 *
 * @property int $id
 * @property string $label
 * @property string $body
 * @property int $question_id
 * @property int $is_correct
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Answer extends Model
{
    //
}
