<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use HasFactory;
    
    public $table = 'employee';
    protected $fillable = ['First_Name','Last_Name','Age', 'City', 'Position', 'Department', 'Division'];
    protected $guarded = ['img'];
}

