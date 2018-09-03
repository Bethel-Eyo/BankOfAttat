<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use App\State;

class StateSeeder extends Seeder
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
        // var_dump($results[0]);
        // return;
        foreach ($results as $result){
            // var_dump($result);
            // echo 'james';
            // var_dump($result);
            // return;
            State::create([
                'name'=> $result->state->name
            ]);
        }



    }
}
