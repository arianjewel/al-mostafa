<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class CareerCategory extends Model
{
    public function job(){
    	return $this->hasMany(Job::class, 'category_id');
    }
}
