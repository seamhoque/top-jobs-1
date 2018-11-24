<?php

namespace App\Http\Controllers\Jobs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index');
    }
}
