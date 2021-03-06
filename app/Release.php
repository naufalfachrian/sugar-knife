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

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function project()
    {
        return $this->belongsTo('App\Project', 'project');
    }

    public function links()
    {
        return $this->belongsToMany('App\Link');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
