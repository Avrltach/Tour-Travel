<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PromoCode extends Model
{
    use HasFactory, softDeletes;

     protected $fillable = [
    'package_id',
    'code',
    'diskon_persen',
    'start_date',
    'end_date',
    'status',
     ];
     public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
