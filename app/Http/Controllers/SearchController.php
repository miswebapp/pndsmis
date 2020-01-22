<?php

namespace App\Http\Controllers;

use App\Project;
use App\Municipal;
use App\Cycle;
use App\Search\ProjectSearch;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function filter(Request $request)
    {
        $municipals = Municipal::all();
        $cycles = Cycle::all();
        if($request['activity'] == 'project'){
            $projects = ProjectSearch::apply($request);
            // return view('categories.technical.index', compact('projects','municipals','cycles'));
            return $response->json($projects);
        }
    }
}
