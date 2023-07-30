<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogs extends Model
{
    protected $fillable = ['title','description','image','created_at','updated_at','kategori'];
    
    protected $table = 'catalogs';

}
