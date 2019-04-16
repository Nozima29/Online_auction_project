<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_lot', 'lot_id', 'category_id')
                    ->withTimestamps();
    }
}