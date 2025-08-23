<?php
namespace App;

class User
{

    public array $accounts = [];

    public array $categories = [];

    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public ?int $id = null,
    ) {
    }
}