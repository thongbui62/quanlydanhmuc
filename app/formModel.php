<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formModel extends Model
{
    protected $table='form';
    public function elementForm()
    {
    	return $this->hasMany('App\elementFormModel','id_form');
    }
}
