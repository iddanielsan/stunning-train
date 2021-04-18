<?php

namespace App\Services;
use App\Repositories\Contracts\WalletRepository;
use InvalidArgumentException;

class WalletService {
    public function __construct(WalletRepository $walletRepository)
    {
        $this->walletRepository = $walletRepository;
    }

    public function store($request)
    {
        try {
            return $this->incomeRepository->createWallet($request);
        } catch (\Throwable $th) {
            throw new InvalidArgumentException('Unable to create income.');
        }

    }
}