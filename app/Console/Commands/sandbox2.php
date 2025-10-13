<?php

use Illuminate\Console\Command;
use mysql_xdevapi\Exception;
use PhpParser\Node\Stmt\Else_;

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Sandbox2 extends Command
{

    protected $signature = 'sandbox2';

    public function handle()
    {
