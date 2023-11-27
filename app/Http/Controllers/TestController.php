<?php

namespace App\Http\Controllers;

use App\WebService\WebService;

class TestController extends Controller
{
    public WebService $webService;

    public function __construct(WebService $webService)
    {
        $this->webService = $webService;
    }

    public function index()
    {
        return 'index';
    }
}
