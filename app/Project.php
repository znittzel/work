<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        "user_id",
        "provider_id",
    	"name",
    	"startDate",
    	"endDate",
    	"pricePerHour"
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function provider() {
    	return $this->belongsTo('App\Provider');
    }
}
