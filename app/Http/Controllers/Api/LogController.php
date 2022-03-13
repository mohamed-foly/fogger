<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LogEntry;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function store(Request $request)
    {
        LogEntry::create([
            'host_name'=> $request->hostname,
            'host_address'=> $request->ip(),
            'service'=> $request->service,
            'level'=> $request->level,
            'message'=> $request->message,
            'details'=> $request->details
        ]);
        return response()->json();
    }
}
