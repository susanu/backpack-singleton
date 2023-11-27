<?php

namespace App\WebService;

class WebService
{
    public string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }
}
