<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demostudent extends Model
{
    use HasFactory;
    protected $fillable = ['name','kidclass','email','kidage','parentphone','parentemail','parentname','_token'];
}
