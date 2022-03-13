<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\LogEntry;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return view('entries.index', ['entries'=> LogEntry::latest()->paginate()]);
    }

    public function show(LogEntry $entry)
    {
        return view('entries.show', ['entry'=>$entry]);
    }

}
