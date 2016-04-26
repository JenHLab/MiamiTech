<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function acin() {

    	return $this->belongsTo(Description::class);

    }
}
