<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    //use HasFactory;
    protected $table="clientes";
    protected $primartKey='id';
    protected $fillable=["email","contraseña"];
    public $timestamps = false;
}
