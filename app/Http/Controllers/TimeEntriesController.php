<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TimeEntry;

class TimeEntriesController extends Controller
{
    // Gets time entries and eager loads their associated users
    public function index()
    {
        $time = TimeEntry::with('user')->get();

        return $time;
    }
}
