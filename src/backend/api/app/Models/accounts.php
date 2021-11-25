<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    protected $table = 'accounts';

    public $timestamps = false;

    protected $fillable = [
        'email'
    ];
}