<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipal;
use App\AdminPost;
use App\Suco;
use App\Aldeia;

class LocationController extends Controller
{

    public function getAllMunicipal()
    {
        return response()->json(Municipal::get(["Distict_ID","District_name"]));
    }
    public function getMunicipal($id)
    {
        if(!empty($id)){
            $municipal = Municipal::find($id)->only("District_name","Distict_ID");
        }else{
            $municipal = Municipal::all();
        }
        return response()->json($municipal);
    }

    public function getAdminPost(Municipal $municipal)
    {
        return response()->json($municipal->posto()->get(["Subdistrict_ID","Subdistrict_name","District_ID"]));
    }

    public function getSuco(AdminPost $posto)
    {
        return response()->json($posto->suco()->get(["Suco_ID","Suco_Name","SubDistrict_ID"]));
    }

    public function getAldeia(Suco $suco)
    {
        return response()->json($suco->aldeia()->get(["ID","Aldeia_name","Suco_ID"]));
    }
}
