<?php

namespace App\Http\Controllers;

use App\Services\GreetingService;
use App\Services\MathService;
use App\Services\InfoService;
use App\Services\LoggerService; 
class ComponentDemoController extends Controller
{
    protected $greet;
    protected $math;
    protected $info;
    protected $logger; 
    
    public function __construct(
        GreetingService $greet,
        MathService $math,
        InfoService $info,
        LoggerService $logger
    ) {
        $this->greet = $greet;
        $this->math = $math;
        $this->info = $info;
        $this->logger = $logger;
    }

    public function index()
    {
        // Use LoggerService
        $logMessage = $this->logger->log("Demo route was accessed.");

        return [
            "info" => $this->info->getSystemInfo(),
            "greeting" => $this->greet->greet("Student"),
            "sum" => $this->math->add(10, 20),
            "log" => $logMessage 
        ];
    }
}
