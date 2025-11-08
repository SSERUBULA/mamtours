<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsOutbox extends Model
{
    protected $fillable = ['fullname', 'phone', 'message', 'status'];
}
