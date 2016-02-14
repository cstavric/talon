<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{


    public function roster()
    {
        return $this->hasMany('Roster', 'sport_id');
    }


}
