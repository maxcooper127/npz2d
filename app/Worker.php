<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Stevebauman\Location\Facades\Location;


class Worker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'name', 'email', 'country',
    ];


   public function country()
    {
        return 1;
    }



}
