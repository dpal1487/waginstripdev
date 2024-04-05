<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airbook extends Model
{
    use HasFactory;
    public $fillable=[
            'name',
            'email',
            'phone',
            'subject',
            'message'
            
            ];
   
}
