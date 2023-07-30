<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Telephone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->count(10)->create()->each(function($client){
            $client->telephones()->save(Telephone::factory()->make());
        });
    }
}
