<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['title','short_details','full_details','image'];
}