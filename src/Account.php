<?php

namespace App;

class Account
{
    
    public array $transactions = [];
    
    public function __construct(
        public int $userId,
        public string $name,
        public string $currency,
        public float $balance,
        public ?int $id = null,
    ) {
    }
}
