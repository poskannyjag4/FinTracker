<?php

namespace App;

class Category
{

    public array $transactions = [];

    public function __construct(
        public int $userId,
        public string $name,
        public ?int $id = null,
    ) {
    }
}