<?php

namespace App\Repositories\Contracts;

/**
 * Interface WalletRepository.
 */
interface WalletRepository extends BaseRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function createWallet($request);
}