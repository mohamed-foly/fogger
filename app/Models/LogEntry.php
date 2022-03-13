<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    use HasFactory;

    protected $fillable = ['host_name','host_address','service','level','message','details'];

    protected $casts = [
        'details'=> 'array'
    ];
}
