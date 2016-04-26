<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acin extends Model
{
	//protected $fillable = ['body'];

    public function descriptions() {

    	return $this->hasMany(Description::class);
    }


    protected $table = 'acin';
}
