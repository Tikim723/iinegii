<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
      'question'
    ];

    public function options()
    {
      return $this->hasMAny('App/Option');
    }

}
