<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


class TransactionParticipants extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
    'transaction_id',
    'promo_code_id',
    'subtotal',
    'diskon',
    'total',
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class);
    }
}
