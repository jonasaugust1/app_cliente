<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Telephone;
use Illuminate\Support\Facades\Session;

class TelephoneController extends Controller
{
    public function add($clientId){
        $client = Client::find($clientId);

        return view('telephone.add', compact('client'));
    }

    public function save(Request $request, $clientId){
        $phone = new Telephone;

        $phone->title = $request->input('title');
        $phone->ddi = $request->input('ddi');
        $phone->ddd = $request->input('ddd');
        $phone->phone = $request->input('phone');

        Client::find($clientId)->addTelephone($phone);

        Session::flash('flash_message', [
            'msg'=>"Telefone adicionado com sucesso",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client.detail', $clientId);
    }

    public function edit($id){
        $phone = Telephone::find($id);

        if(!$phone){
            Session::flash('flash_message', [
                'msg'=>"Telefone não encontrado.",
                'class'=>"alert-danger"
            ]);

            return redirect()->route('client.detail', $phone->client->id);
        }

        return view('telephone.edit', compact('phone'));
    }

    public function update(Request $request, $id){
        $phone = Telephone::find($id);

        if(!$phone){
            Session::flash('flash_message', [
                'msg'=>"Telefone não encontrado",
                'class'=>"alert-danger"
            ]);

            return redirect()->route('client.detail');
        }

        $phone->update($request->all());

        Session::flash('flash_message', [
            'msg'=>"Telefone atualizado com sucesso",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client.detail', $phone->client->id);
    }

    public function delete($id){
        $phone = Telephone::find($id);

        $phone->delete();

        Session::flash('flash_message', [
            'msg'=>"Telefone deletado com sucesso",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client.detail', $phone->client->id);
    }
}
