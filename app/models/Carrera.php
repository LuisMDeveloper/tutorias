<?php 

class Carrera extends Eloquent {

	public function docentes()
	{
		return $this->hasMany('Docente');
	}

	public function grupos()
	{
		return $this->hasMany('Grupo');
	}
}