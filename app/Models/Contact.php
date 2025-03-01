<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory; 
    protected $fillable = ['id', 'name', 'email', 'title', 'body', 'phone', 'ip_address'];
}
