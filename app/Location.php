<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = ['parent_id','name','status'];


    public function children()
    {
        return $this->hasMany('App\Location', 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Location', 'parent_id');
    }
}
