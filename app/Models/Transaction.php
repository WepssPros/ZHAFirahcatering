<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id',
        'name',
        'name_acara',
        'request_tambahan',
        'request_sambal',
        'request_sambal2',
        'request_saung',
        'email',
        'tglacara',
        'porsi',
        'deposit',
        'address',
        'phone',
        'service',
        'payment',
        'payment_url',
        'total_price',
        'total_price_porsi',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function transaction()
    {
        return $this->hasMany(TransactionItem::class, 'transactions_id', 'id');
    }

}
