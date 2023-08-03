<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Telephone;
use \Session;

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
}
