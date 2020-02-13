<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Option 1
    // protected $fillable = ['name', 'email'];

    // Option 2
    protected $guarded = [];
}
