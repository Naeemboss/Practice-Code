<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    // Fixing the typo: 'fales' should be 'false'
    public $timestamps = false;

    // protected $guarad =[];

    protected $fillable =['name','email','address','age','city'];
}
