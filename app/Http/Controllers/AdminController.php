<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function dashboard()
    {
        $playersCount = Player::count();
        return view('admin.dashboard', compact('playersCount'));
    }

    /**
     * Show the players management page.
     */
    public function players()
    {
        $players = Player::orderBy('jersey_number')->get();
        return view('admin.players.index', compact('players'));
    }
}
