<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum');
    }
    public function index(){
        $clients = Client::paginate(15);

        return view('client.index', compact('clients'));
    }
}
