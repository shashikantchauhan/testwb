<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];	

    public function workshops(){
    	return $this->hasMany(Workshop::class,'event_id','id');
    }

    
}
