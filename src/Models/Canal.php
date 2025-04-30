<?php

namespace App\Models;

use App\Models\User;

class Canal
{
    private int $id;
    private User $sender;
    private User $receiver;
    private string $key;
    private bool $archive;
}