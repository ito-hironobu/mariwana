<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //
    protected $fillable = ['email', 'password'];
    // protected $hidden = ['password']; // よくわからん
}
