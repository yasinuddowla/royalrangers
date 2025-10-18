<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function dashboard()
    {
        $teamMembersCount = TeamMember::count();
        return view('admin.dashboard', compact('teamMembersCount'));
    }

    /**
     * Show the team members management page.
     */
    public function teamMembers()
    {
        $teamMembers = TeamMember::orderBy('jersey_number')->get();
        return view('admin.team-members.index', compact('teamMembers'));
    }
}
