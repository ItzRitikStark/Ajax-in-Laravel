<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'test_1'; 
    protected $fillable = [
        'first_name',
        'last_name',
        'hometown',
        'age',
        'job',
    ];
}
