<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lots extends Model
{
     protected $fillable = ['lot_name', 'category', 'bid_price', 'created_at'];
}
