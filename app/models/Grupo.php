<?php 

class Grupo extends Eloquent {

	public function carrera()
	{
		return $this->belongsTo('Carrera');
	}
}