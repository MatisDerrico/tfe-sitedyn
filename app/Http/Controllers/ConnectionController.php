<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function index ()
    {
        dd('coucou');
        return Connection::all();
    }
}
