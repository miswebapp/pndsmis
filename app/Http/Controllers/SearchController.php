<?php

namespace App\Http\Controllers;

use App\Project;
use App\Municipal;
use App\Cycle;
use App\Search\ProjectSearch;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;


class SearchController extends Controller
{
    public function filter(Request $request , ResponseFactory $response)
    {
        // $municipals = Municipal::all();
        // $cycles = Cycle::all();
        $projects = '';
        if($request['activity'] == 'project'){
            $projects = ProjectSearch::apply($request);
            // return view('categories.technical.index', compact('projects','municipals','cycles'));
        }else{
            $projects = ProjectSearch::apply($request);
        }
        return $response->json($projects);

        
    }

}
