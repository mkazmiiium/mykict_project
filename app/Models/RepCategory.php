<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepCategory extends Model
{
     // One RepCategory can have many Achievements
     public function achievements()
     {
         return $this->hasMany(Achievement::class);
     }
}
