<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
  use SoftDeletes;
  protected $fillable = ['title', 'name', 'type'];
  protected $dates = ['deleted_at'];
}
