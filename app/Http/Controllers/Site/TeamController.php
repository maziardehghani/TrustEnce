<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResources;
use App\Models\Team;

class TeamController extends Controller
{
    public function teams()
    {
        $teams = Team::query()->latest()->get();

        return response()->success(TeamResources::collection($teams), 200);
    }

}
