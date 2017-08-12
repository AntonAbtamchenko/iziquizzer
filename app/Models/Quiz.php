<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Quiz
 *
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property string|null $excerpt
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Quiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Quiz whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Quiz whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Quiz whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Quiz whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Quiz whereUserId($value)
 * @mixin \Eloquent
 */
class Quiz extends Model
{
    //
}
