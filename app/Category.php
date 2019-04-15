<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function lots()
    {
        return $this->belongsToMany('App\Lot', 'lot_category', 'category_id', 'lot_id')
                    ->withTimestamps();
    }
}
