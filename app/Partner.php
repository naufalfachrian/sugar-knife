<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name', 'homepage', 'note',
    ];

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
}
