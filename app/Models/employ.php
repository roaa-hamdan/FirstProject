<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employ extends Model
{
    protected $fillable = ['name','id','phone','address'];
    public $timestamps = false;
    use HasFactory;
}
