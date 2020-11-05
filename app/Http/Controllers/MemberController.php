<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\member;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all(); 
        $teams = Team::all(); 
        return view('member.index', compact('members', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('member.addMember', compact('teams'));
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
            'nama_member' => 'required|string',
            'no_member' => 'required|string',
            'role' => 'required|string',
            'playing_for'=>'required|string',
        ]);

        Member::create([
            'nama_member' => $data['nama_member'],
            'no_member' => $data['no_member'],
            'role' => $data['role'],
            'playing_for' => $data['playing_for'],
        ]);

        return redirect()->route('member.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(member $member)
    {
        $members = Member::all();
        return view('member.editMember', compact('member', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member $member)
    {
        $member->update($request->all());
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(member $member)
    {
        $member->delete();
        return redirect()->route('member.index');
    }
}
