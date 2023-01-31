<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violinist extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'violinist_name',
        'violinist_nationality',
        'violinist_born',
        'violinist_died'
    ];
}
