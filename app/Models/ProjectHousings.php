<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectHousings extends Model
{
    use HasFactory;
    public function housings()
    {
        return $this->belongsTo(Project::class);
    }
}