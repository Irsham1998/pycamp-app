<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// aktifkan softdelete
use Illuminate\Database\Eloquent\SoftDeletes;

class Camps extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'title',
        'price'
    ];
}
