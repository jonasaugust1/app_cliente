<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'ddi', 'ddd', 'phone'];

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
