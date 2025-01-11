<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // One Department can have many Achievements
    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}
