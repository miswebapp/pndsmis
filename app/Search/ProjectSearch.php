<?php
namespace App\Search;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjectSearch {
    public static function apply(Request $filter)
    {
        $project = (new Project)->newQuery();
        $project->leftjoin('dbo.Suco_Cycles','dbo.Suco_Subproject.Suco_CycleID','=','dbo.Suco_Cycles.Suco_CycleID')
                ->join('dbo.zCycles','dbo.Suco_Cycles.CycleID','=','dbo.zCycles.Cycle_ID')
                ->join('dbo.zSuco','dbo.Suco_Cycles.Suco_ID','=','dbo.zSuco.Suco_ID')
                ->join('dbo.zSubdistrict','dbo.zSuco.SubDistrict_ID','=','dbo.zSubdistrict.Subdistrict_ID')
                ->join('dbo.zDistrict','dbo.zSubdistrict.District_ID','=','dbo.zDistrict.Distict_ID')
                ->join('dbo.zSuco_phase','dbo.zSuco.Suco_phase','=','dbo.zSuco_phase.ID');
                // ->join('dbo.zSuco_phase','dbo.PhaseCycle.PhaseID','=','dbo.zSuco_phase.ID');

        if($filter->filled('cycle')){
            $project->where('dbo.Suco_Cycles.CycleID','=',$filter->input('cycle'));
        }

        if($filter->filled('municipal'))
        {
            $project->where('dbo.zDistrict.Distict_ID','=',$filter->input('municipal'));
        }

        if($filter->filled('phase'))
        {
            $project->where('dbo.zSuco_phase.ID','=',$filter->input('phase'));
        }

        $project->select('dbo.zCycles.Cycle_name','dbo.zSuco_phase.Phase','dbo.zDistrict.District_name','dbo.zSubdistrict.Subdistrict_name','dbo.zSuco.Suco_Name','dbo.Suco_Subproject.*');
        // $project->groupBy('dbo.Suco_Cycles.Suco_CycleID');
        return $project->get();
        // return "Searching for your queries...!";
    }
}

?>
