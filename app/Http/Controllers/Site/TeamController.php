<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResources;
use App\Models\Team;

class TeamController extends Controller
{
    public function teams()
    {
        $teams = Team::query()->orderByDesc('id')->get();

        return response()->success(TeamResources::collection($teams), 200);
    }

}
