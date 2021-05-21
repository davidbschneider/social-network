<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'postable_id','postable_type','author_id','content'
    ];

    /**
     * The stream's object
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function postable()
    {
        return $this->morphTo();
    }

    /**
     * The author of the post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
