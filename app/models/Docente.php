<?php 

class Docente extends Eloquent {

	public function carrera()
	{
		return $this->belongsTo('Carrera');
	}
}