<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class angka extends Model
{
    protected $table = 'angka';

    protected $guarded = ['id'];

    public $timestamps = false;
}
