<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CricketScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'runs', 'wickets', 'fours', 'sixes'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'runs' => 'integer',
        'wickets' => 'integer',
        'fours' => 'integer',
        'sixes' => 'integer'
    ];
}