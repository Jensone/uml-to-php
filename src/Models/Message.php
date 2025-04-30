<?php

namespace App\Models;

use App\Models\User;

class Message
{
    private int $id;
    private string $content;
    private \DateTime $date;
    private User $sender;
}