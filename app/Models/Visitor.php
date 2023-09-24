<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'visitor_name', 
        'visitor_email', 
        'visitor_phone_number', 
        'visitor_address', 
        'visit_purpose', 
        'visitor_status'
];
}
