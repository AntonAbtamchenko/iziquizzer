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
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'user_id'
    ];

    /**
     * Quiz author relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Quiz questions relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
