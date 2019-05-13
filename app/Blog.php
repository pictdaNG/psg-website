<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
  use SoftDeletes;

  public $primarykey = 'id';  
  protected $fillable = ['title', 'body', 'slug', 'feature_image'];
  protected $dates = ['deleted_at'];

  public function user() {
    return $this->belongsTo('App\User');
  }
}