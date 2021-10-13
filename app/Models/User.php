<?php

namespace App\Models;

use Carbon\Carbon;

class User
{
    private string $id;
    private string $name;
    private string $email;
    private string $password;
    private string $createdAt;


    public function __construct(string $id, string $name, string $email, string $password, ?string $createdAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->createdAt = $createdAt ?? Carbon::now();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCreatedAt(): string
    {
    return $this->createdAt;
    }



}

