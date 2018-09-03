<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Lga;

class LgaController extends Controller
{
    public function getByState($state){
        $lgas = Lga::where('state_id', $state)->get();
        // dd($lgas);
        return $lgas;
    }
}
