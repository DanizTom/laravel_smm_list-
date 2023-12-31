<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = ['user_id', 'wallet_balance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
