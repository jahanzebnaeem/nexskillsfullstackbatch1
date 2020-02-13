<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Option 1 - allowed values
    // protected $fillable = ['name', 'email'];

    // Option 2 - excepted values
    protected $guarded = [];
}
