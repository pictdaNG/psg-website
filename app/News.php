<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
		'title',
		'body',
        'slug',
        'news_image',
        'news_category',
        'tags' 
	];
	
		public function user(): BelongsTo
      {
        return $this->belongsTo(User::class);
      }
}
