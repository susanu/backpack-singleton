<?php

namespace App\Http\Controllers;

use App\WebService\WebService;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class TestCrudController extends CrudController
{
    public WebService $webService;

    public function __construct(WebService $webService)
    {
        parent::__construct();

        $this->webService = $webService;
    }
}
