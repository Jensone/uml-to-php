<?php

namespace App\Models;

class Notification
{
    private int $id;
    private string $content;
    private \DateTime $date;
    private bool $status;
}