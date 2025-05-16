<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamStoreRequest;
use App\Http\Resources\TeamResources;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::query()->latest()->get();

        return response()->success(TeamResources::collection($teams), 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamStoreRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return response()->success(new TeamResources($team));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
