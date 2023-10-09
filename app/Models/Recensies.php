<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recensies extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable = ['Naam', 'Recensie', 'Beoordeling'];
}


