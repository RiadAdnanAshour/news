<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['id', 'name', 'email', 'title', 'body', 'phone', 'ip_address'];
}
