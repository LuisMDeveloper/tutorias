<?php 

class Formato1 extends Eloquent {

	protected $table = 'f1';

	public function user()
    {
        return $this->belongsTo('User');
    }

}