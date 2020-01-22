<?php
namespace App\Search;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProjectProgresSearch {
    public static function apply(Request $filters)
    {
        $project = (new Project)->newQuery();
        if($filters->has('cycle')){
            $project->sucoCycle->where('CycleID','=',$request('cycle'));
        }
        return $project()->get();
    }
}

?>
