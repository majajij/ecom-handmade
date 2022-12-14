<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // 'order_id',
    protected $fillable = ['payment_id', 'order_id', 'payer_id', 'payer_email', 'amount', 'currency', 'payment_status'];
}
