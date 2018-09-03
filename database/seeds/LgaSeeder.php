<?php

use Illuminate\Database\Seeder;
use App\Lga;
use App\State;
use GuzzleHttp\Client;


class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client;
        $response = $client->request('GET', 'https://gist.githubusercontent.com/segebee/7dde9de8e70a207e6e19/raw/90c91f7318d67c9534e3a4d74e4bd755b144e01e/gistfile1.txt');
        $results = $response->getBody()->getContents();
        $results = json_decode($results);

        foreach($results as $result){
            $state_id =$result->state->id;
            foreach($result->state->locals as $local){
                Lga::create([
                    'state_id'  =>$state_id,
                    'name'      =>$local->name,
                ]);
            }
        }

    }
}
