<?php 

class Formato2 extends Eloquent {

	protected $table = 'f2';

	public function user()
    {
        return $this->belongsTo('User');
    }

}