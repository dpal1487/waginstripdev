<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirlineCode extends Model
{
    use HasFactory;
    protected $table = 'airlinecodes';
    protected $primary_key = 'id';
    
}
