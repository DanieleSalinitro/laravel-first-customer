<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HallMovie;

class ProjectionController extends Controller
{
    public function index(){
        $projections= HallMovie::all();
        return response()->json([
            'success'=> true,
            'results'=> $projections
        ]);
      }
      public function show($id){

        $projections= HallMovie::where('id',$id)->with('hall','slot')->first();
        return response()->json([
            'success'=> true,
            'results'=> $projections
        ]);
      }
}

