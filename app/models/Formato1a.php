<?php 

class Formato1a extends Eloquent {

	protected $table = 'f1a';

	public function user()
    {
        return $this->belongsTo('User');
    }

}