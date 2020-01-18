<?php

namespace App\Http\Controllers;

use App\Project;
use App\Search\ProjectSearch;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        if($request['activity'] == 'project'){
            return ProjectSearch::apply($request);
        }
        // else if($request->has('project_progress')){
        //     return ProjectProgresSearch::apply($request);
        // }

       
    }
}
