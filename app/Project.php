<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'status', 'description', 'type', 'note', 'created_by', 'join_with',
    ];

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
