<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acin extends Model
{
	protected $fillable = ['name', 'about', 'address', 'website', 'contact'];

    /*public function descriptions() {

    	return $this->hasMany(Description::class);
    }*/


    protected $table = 'acin';
}
