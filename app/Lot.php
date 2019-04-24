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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function highestBidUser()
    {
        return $this->belongsTo('App\User');
    }

    public function winner()
    {
        return $this->belongsTo('App\User');
    }

    public function favoriteByUsers()
    {
        return $this->belongsToMany('App\User', 'lot_user', 'lot_id', 'user_id')
                    ->withTimestamps();
    }
}