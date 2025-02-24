<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class setting extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'label' , 'value', 'type'];
}