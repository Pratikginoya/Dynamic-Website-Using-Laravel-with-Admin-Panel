<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    protected $table = 'photos';
    protected $fillable = ['title','details','type','image'];
}
