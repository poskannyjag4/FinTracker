<?php 

namespace App;

use \DateTimeImmutable;

class Transaction
{
    public function __construct(
        public int $accountId,
        public int $categoryId,
        public float $amount, 
        public DateTimeImmutable $transaction_date,
        public bool $isRecurring,
        public ?string $note = null, 
        public ?int $id = null,
    ) {
    }
}