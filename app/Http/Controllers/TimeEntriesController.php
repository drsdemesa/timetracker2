<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TimeEntry;

// use Illuminate\Support\Facades\Request;

class TimeEntriesController extends Controller
{
    // Gets time entries and eager loads their associated users
    public function index()
    {
        $time = TimeEntry::with('user')->get();

        return $time;
    }

    // Grab all the data passed into the request and save a new record
	public function store(Request $request)
	{
	    $data = $request->all();

	    $timeentry = new TimeEntry();

	    $timeentry->fill($data);

	    $timeentry->save();

	}

	// Grab all the data passed into the request and fill the database record with the new data
	public function update($id, Request $request)
	{
	    $timeentry = TimeEntry::find($id);
	    
	    $data = $request->all();

	    $timeentry->fill($data);

	    $timeentry->save();
	        
	}
}
