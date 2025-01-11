<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Relationship to RepCategory
    public function repCategory()
    {
        return $this->belongsTo(RepCategory::class, 'rep_category_id');
    }
}
