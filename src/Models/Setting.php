<?php

namespace App\Models;

use App\Models\User;

class Setting
{
    private int $id;
    private User $owner;
    private array $parameters;

    
    public function __construct(
        User $owner
    ) {
        $this->owner = $owner;
    }
}
