<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_types_rent extends Model
{
    protected $table = 'property_types_rents';

    protected $fillable = ['name','slug'];

    public $timestamps = false;
}
