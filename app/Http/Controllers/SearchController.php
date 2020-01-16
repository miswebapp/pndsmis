<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function search(Request $request , Project $project)
    {
        $check = $request['check'];

        if($check === 'technical'){

        }else if($check === 'social'){

        }else if($check === 'finance'){

        }else{

        }
        return "Searching for your queries...!".$request['check'] ;
    }
}
