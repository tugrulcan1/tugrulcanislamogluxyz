<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'contact_info';

    protected $fillable = [
        'address',
        'location',
        'phone',
        'email',
        'working_time',
    ];
}