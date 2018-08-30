<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metrostation extends Model
{
  public function line()
  {

    return $this->belongsTo(Line::class);

  }
}
