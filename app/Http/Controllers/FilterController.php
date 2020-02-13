<?php

namespace App\Http\Controllers;

use App\Phase;
use App\Cycle;
use App\Municipal;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class FilterController extends Controller
{
    public function getCycles(ResponseFactory $response)
    {
        $cycles = Cycle::all();
        return $response->json($cycles);
    }

    public function getMunicipals(ResponseFactory $response)
    {
        $municipals = Municipal::all();
        return $response->json($municipals);
    }

    public function getPhases(ResponseFactory $response){
        $phases = Phase::all();
        return $response->json($phases);
    }
}
