<?php

namespace App\Models;

use App\Models\User;

class ContactList
{
    private int $id;
    private User $owner;
    private array $contacts;
}