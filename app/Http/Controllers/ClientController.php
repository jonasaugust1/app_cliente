<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum');
    }
    public function index(){
        $clients = Client::paginate(15);

        return view('client.index', compact('clients'));
    }
    public function add(){
        return view('client.add');
    }

    public function save(Request $request){
        Client::create($request->all());

        /*
            Alerta
            msg => mensagem
            class => classe bootstrap
        */
        Session::flash('flash_message', [
            'msg'=>"Cliente adicionado com sucesso",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client.add');
    }

    public function detail($id){
        $client = Client::find($id);
        return view('client.detail', compact('client'));
    }

    public function edit($id){
        $client = Client::find($id);

        if(!$client){
            Session::flash('flash_message', [
                'msg'=>"Cliente não encontrado",
                'class'=>"alert-danger"
            ]);

            return redirect()->route('client.add');
        }

        return view('client.edit', compact('client'));
    }

    public function update(Request $request, $id){
        $client = Client::find($id);

        if(!$client){
            Session::flash('flash_message', [
                'msg'=>"Cliente não encontrado",
                'class'=>"alert-danger"
            ]);

            return redirect()->route('client.add');
        }

        $client->update($request->all());

        Session::flash('flash_message', [
            'msg'=>"Cliente atualizado com sucesso",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client');
    }

    public function delete($id){
        $client = Client::find($id);

        $client->delete();

        Session::flash('flash_message', [
            'msg'=>"Cliente deletado com sucesso",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client');
    }
}
