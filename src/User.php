<?php
namespace App;

class User
{

    public array $accounts = [];

    public array $categories = [];

    public string $name;
    public string $email;
    public string $password;
    public ?int $id;
}