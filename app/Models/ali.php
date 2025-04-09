<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ali extends Model
{
    use HasFactory;

    public function phonenumber(){

        return $this->hasOneThrough(phone_number::class,companyies::class);
    }
}
