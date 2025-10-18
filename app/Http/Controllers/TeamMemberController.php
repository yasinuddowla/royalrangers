<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource (Public view).
     */
    public function index()
    {
        $teamMembers = TeamMember::orderBy('jersey_number')->get();
        return view('home', compact('teamMembers'));
    }

    /**
     * Display all players page.
     */
    public function players()
    {
        $teamMembers = TeamMember::orderBy('jersey_number')->get();
        return view('players.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'jersey_name' => 'required|string|max:255',
            'jersey_size' => 'required|string|max:50',
            'trouser_size' => 'required|string|max:50',
            'jersey_number' => 'required|integer|unique:team_members,jersey_number',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'cricheroes_profile_link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('team-members', 'public');
        }

        TeamMember::create($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamMember $teamMember)
    {
        return view('team-members.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'jersey_name' => 'required|string|max:255',
            'jersey_size' => 'required|string|max:50',
            'trouser_size' => 'required|string|max:50',
            'jersey_number' => 'required|integer|unique:team_members,jersey_number,' . $teamMember->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'cricheroes_profile_link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($teamMember->photo) {
                Storage::disk('public')->delete($teamMember->photo);
            }
            $data['photo'] = $request->file('photo')->store('team-members', 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $teamMember)
    {
        // Delete photo if exists
        if ($teamMember->photo) {
            Storage::disk('public')->delete($teamMember->photo);
        }

        $teamMember->delete();

        return redirect()->route('admin.team-members.index')->with('success', 'Team member deleted successfully!');
    }
}
