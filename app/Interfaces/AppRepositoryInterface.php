<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface AppRepositoryInterface 
{
    public function getAll($locale = null);
}