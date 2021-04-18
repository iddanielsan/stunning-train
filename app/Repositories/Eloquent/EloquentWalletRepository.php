<?php

namespace App\Repositories\Eloquent;

use App\Models\Wallet;
use App\Repositories\Contracts\WalletRepository;

class EloquentWalletRepository extends EloquentBaseRepository implements WalletRepository
{
    protected $wallet;

    public function __construct(Wallet $wallet)
    {
        parent::__construct($wallet);
        $this->wallet = $wallet;
    }

    public function createWallet($request) {
        return $this->wallet->create($request->all());
    }
}