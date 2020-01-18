<?php
namespace App\Search;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProjectProgresSearch {
    public static function apply(Request $request,  Project $project)
    {
        if($request->has('cycle')){
            
        }
        return "Searching for your queries...!";
    }
}

?>
