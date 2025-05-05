<?php

namespace App\Models;

use App\Models\User;

class Group
{
    private int $id;
    private string $name;
    private User $admin;
    private bool $private = true;
    
    public function __construct(
        string $name,
        User $admin
    ) {
        $this->name = $name;
        $this->admin = $admin;
    }
}