<?php

namespace App\Http;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class CustomResponse
{
    public const MY_CUSTOM_MESSAGE = 1000;

    /**
     * @var string
     */
    protected $statusText;

    public static $statusTexts = [
        1000 => 'My custom message'
    ];

}



