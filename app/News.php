<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

     protected $fillable = ['news', 'place', 'date'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['news', 'place', 'created_at'];

    
}
