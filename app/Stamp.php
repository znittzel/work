<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    protected $fillable = [
    	'project_id',
    	'datetime',
    	'comment',
    	'hours',
    	'reference'
    ];

    public function project() {
    	return $this->belongsTo('App\Project');
    }
}
