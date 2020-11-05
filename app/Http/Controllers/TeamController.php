<?php

namespace App\Http\Controllers;

use App\Models\team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.addTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_team' => 'required|string',
            'no_team' => 'required|string',
            'game' => 'required|string',
        ]);

        Team::create([
            'nama_team' => $data['nama_team'],
            'no_team' => $data['no_team'],
            'game' => $data['game'],
        ]);

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        return view('team.editTeam', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        $team->update($request->all());
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        $team->delete();
        return redirect()->route('team.index');
    }
}
