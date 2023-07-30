<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function telephones(){
        return $this->hasMany('App\Models\TelePhone');
    }
    public function addTelephone(Telephone $phone){
        return $this->getTelephones()->save($phone);
    }
}
