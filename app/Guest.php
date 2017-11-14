<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'dietary_restrictions', 'is_attending', 'plus_one', 'email'
    ];

    /**
     * Get the guests's associated guests
     */
    public function associatedGuests()
    {
        return $this->belongsToMany('App\Guest', 'associated_guests', 'guest', 'associated_guest');
    }
}
