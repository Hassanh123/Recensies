<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes'; // Specify the table name if it's different from the default
    protected $primaryKey = 'id'; // Specify the primary key name
    protected $fillable = ['count'];
    public $timestamps = false;
}
