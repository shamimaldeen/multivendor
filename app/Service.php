<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['parent_id','service_name','type','status'];

    public function children()
    {
        return $this->hasMany('App\Service', 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Service', 'parent_id');
    }
}
