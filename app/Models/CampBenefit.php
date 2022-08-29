<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    use HasFactory;

    // untuk menentukan apa saja yang bisa diisi ke database
    protected $fillable =
    [
        'camp_id',
        'name'
    ];
}
