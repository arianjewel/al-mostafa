<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CareerCategory;

class Job extends Model
{
	public function category(){
		return $this->belongsTo(CareerCategory::class, 'category_id');
	}
    
}
