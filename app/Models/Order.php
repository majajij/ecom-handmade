<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'first_name', 'last_name', 'company', 'address', 'city', 'state', 'postcode', 'phone', 'email', 'notes', 'status'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
