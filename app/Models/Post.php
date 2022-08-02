<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     //crear  una propiedad rellenable para usarlo de forma masiva 
    protected $fillable = ['title', 'description'];
}
