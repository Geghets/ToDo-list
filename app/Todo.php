<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = "todo";

    public $timestamps = false;

    protected $fillable = ['date', 'description'];


}