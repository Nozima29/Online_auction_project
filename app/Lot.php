<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'highest_bid',
        'starting_price',
        'country',
        'city',
        'address',
        'posted_at',
        'expired_at',
        'status',
        'user_id',
        'highest_bid_user_id',
        'winner_id'
    ];

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