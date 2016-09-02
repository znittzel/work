<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
    	"name",
    	"contactName"
    ];

    public function projects() {
    	return $this->hasMany('App\Project');
    }
}
