<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandOutUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function project(){
        return $this->hasOne(Project::class,"id","project_id");
    }
}
