<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\indexService;

class indexController extends Controller
{
    protected $service;
    //預先載入
    public function __construct(indexService $indexservice)
    {
        $this->service = $indexservice;
    }
    public function getData()
    {
        return $this->service->getData();   
    }

    public function addData(Request $request)
    {
        return $this->service->addData($request);   
    }
}
