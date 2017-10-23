<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LodgingDetails extends Model
{
        //
        public function room()
        {
            # code...
           return $this->hasOne('App\Room');
        }
}
