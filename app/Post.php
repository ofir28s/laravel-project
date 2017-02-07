<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	/**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function($post) {
            $post->published_at = $post->published_at ?? Carbon::now();
        });
    }

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function scopePublished($query)
    {
        return $query->where('published_at', '<', Carbon::now());
    }

    public function addComment($body)
    {

        $this->comments()->create(compact('body'));

        //-or:
        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);
    }
}
