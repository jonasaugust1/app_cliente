<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Telephone;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address'];
    public function telephones(){
        return $this->hasMany(Telephone::class);
    }
    public function addTelephone(Telephone $phone){
        return $this->telephones()->save($phone);
    }
}
