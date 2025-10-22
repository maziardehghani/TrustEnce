<?php

namespace App\Http\Controllers\Admin\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamStoreRequest;
use App\Http\Resources\TeamResources;
use App\Models\Team;
use App\Services\MediaServices\MediaService;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::query()->latest()->get();


        $teams = $teams->map(function ($team) {
            return [
                'name' => $team->fullName,
                'position' => $team->position,
                'bio' => $team->bio,
                'linkedin' => $team->linkedin,
                'twitter' => $team->twitter,
                'github' => $team->github,
                'profile' => $team->mediaFile,
            ];
        });

        return view('admin.teams.index', compact('teams'));

    }


    public function create()
    {
        return view('admin.teams.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamStoreRequest $request)
    {


        $team = Team::query()->create($request->validated());

        $media = MediaService::uploadIf(
            $request->hasFile('profile'),
            $request->file('profile'),
            'profile',
            'team',
            $team->id,
        );

        return redirect()->route('admin.teams.index');

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
