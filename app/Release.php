<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'description', 'note', 'created_by', 'project',
    ];
}
