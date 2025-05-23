<?php

namespace Component;

class Actor
{
    private string $id;
    private string $role;

    public function __construct(string $id, string $role)
    {
        $this->id = $id;
        $this->role = $role;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}
