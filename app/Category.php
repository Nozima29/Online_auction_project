<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function lots()
    {
        return $this->belongsToMany('App\Lot', 'category_lot', 'category_id', 'lot_id')
                    ->withTimestamps();
    }
}
