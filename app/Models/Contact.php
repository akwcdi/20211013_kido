<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $table = 'contacts';
    
    protected $fillable = [
        'fullname',
        'email',
        'address',
        'postcode',
        'building_name',
        'gender',
        'opinion',
    ];
}