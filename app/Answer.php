<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  public function option()
  {


    protected $fillable = [
      'option','question'
    ];


    return $this->belongsTo('App/Option');
  }
}
