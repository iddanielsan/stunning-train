<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
  
    protected $fillable = [
      'wallet_name', 
      'wallet_balance', 
      'income_value'
    ];
  
    public static function boot()
    {
        parent::boot();

        static::creating(function ($wallet) {
            $wallet->user_id = auth()->user()->id;
        });
    }
   
    public function Outlays () {
    }
}
