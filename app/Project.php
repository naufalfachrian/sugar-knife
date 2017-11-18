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
        'slug', 'title', 'status', 'description', 'type', 'note', 'created_by',
    ];

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function links()
    {
        return $this->belongsToMany('App\Link');
    }

    public function partners()
    {
        return $this->belongsToMany('App\Partner');
    }

    public function releases()
    {
        return $this->hasMany('App\Release', 'project');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
