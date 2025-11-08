<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
    'booking_id',
    'payment_method',
    'payment_status',
    'amount_paid',
    'payment_date',
    'transaction_status',
    ];
     public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function transactionDetail()
    {
        return $this->hasOne(TransactionDetail::class);
    }
}
