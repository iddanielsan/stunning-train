<?php

namespace App\Services;
use App\Repositories\Contracts\WalletRepository;
use InvalidArgumentException;

class WalletService {
    public function __construct(WalletRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store($request)
    {
        try {
            return $this->repository->createWallet($request);
        } catch (\Throwable $th) {
            throw new InvalidArgumentException('Unable to create wallet.');
        }
    }
}