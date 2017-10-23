<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
    public function getRoomTypeAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDescriptionAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPriceAttribute($value)
    {
        return "$".$value;
    }

     public function setNameAttribute($value)
    {
        # code...
        $this->attributes['name'] = strtolower($value);
    }

    public function setDescriptionAttribute($value)
    {
        # code...
       $this->attributes['description'] = strtolower($value);
    }

     public function setImageUrlAttribute($value)
    {
        # code...
        $this->attributes['imageUrl'] = strtolower($value);
    }

     public function setRoomTypeAttribute($value)
     {
        # code...
        $this->attributes['roomType'] = strtolower($value);
    }

        
}
