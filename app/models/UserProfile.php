<?php 

class UserProfile extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function grupo()
    {
        return $this->belongsTo('Grupo');
    }
    
}