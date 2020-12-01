<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Query;


/**
 * App\Models\Tweet
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Tweet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tweet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tweet query()
 * @mixin \Eloquent
 */
class Tweet extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id'=> $user ? $user->id : auth()->id(),
        ], [
            'liked'=>true
        ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes()
            ->where('tweet_id, $this->id')
            ->where('liked', true)
            ->count;
    }

    public function scopeWithLikes($query)
    {
        $query->leftJoinSub(
            'select tweet id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes()
            ->where('tweet_id, $this->id')
            ->where('liked', false)
            ->count;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
