<?php
namespace App\Search;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProjectSearch {
    public static function apply(Request $request)
    {
        $project = (new Project)->newQuery();

        if($request->filled('cycle')){
            $project->where('');
        }
        return "Empty";
        // return "Searching for your queries...!";
    }
}

?>
