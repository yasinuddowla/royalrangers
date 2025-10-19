<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource (Public view).
     */
    public function index()
    {
        $players = Player::orderBy('jersey_number')->get();
        return view('home', compact('players'));
    }

    /**
     * Display all players page.
     */
    public function players()
    {
        $players = Player::orderBy('jersey_number')->get();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.players.create');
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
            'jersey_number' => 'required|integer|unique:players,jersey_number',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'cricheroes_profile_link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('players', 'public');
        }

        Player::create($data);

        return redirect()->route('admin.players.index')->with('success', 'Player added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('admin.players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'jersey_name' => 'required|string|max:255',
            'jersey_size' => 'required|string|max:50',
            'trouser_size' => 'required|string|max:50',
            'jersey_number' => 'required|integer|unique:players,jersey_number,' . $player->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'cricheroes_profile_link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($player->photo) {
                Storage::disk('public')->delete($player->photo);
            }
            $data['photo'] = $request->file('photo')->store('players', 'public');
        }

        $player->update($data);

        return redirect()->route('admin.players.index')->with('success', 'Player updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        // Delete photo if exists
        if ($player->photo) {
            Storage::disk('public')->delete($player->photo);
        }

        $player->delete();

        return redirect()->route('admin.players.index')->with('success', 'Player deleted successfully!');
    }
}
