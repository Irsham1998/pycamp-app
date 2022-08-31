<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'user_id',
        'camp_id',
        'card_number',
        'expired',
        'cvc',
        'is_paid'
    ];

    // agar bisa simpan bulan n tahun ae
    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    // relasi untuk dashboard
    // public function Camps(): BelongsTo
    // {
    //     return $this->belongsTo(Camps::class);
    // }

    /**
     * Get the user that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function Camps(): BelongsTo
    // {
    //     return $this->belongsTo(Camps::class);
    // }

    // relasi checkout dan camp
    public function camps()
    {
        return $this->belongsTo(Camps::class, 'camp_id', 'id') ;
    }


    /**
     * Get the user that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // relasi checkout dan user
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
