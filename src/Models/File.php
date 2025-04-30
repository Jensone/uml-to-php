<?php

namespace App\Models;

use App\Models\Message;

class File
{
    private int $id;
    private string $name;
    private Message $message;
    private string $url;
}