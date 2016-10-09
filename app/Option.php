<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Option extends Model
{
    protected $table = 'options';

    protected $fillable = [
      'option'
    ];

    public function question()
    {
      return $this->belongsTo('App/Question');
    }
    public function answer()
    {
      return $this->belongsTo('App/Answer');
    }


}
