<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoPayment extends Model
{
    use HasFactory;
    protected $table = 'crypto_payments';
    protected $guarded = ['id'];
}
