<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\BookTable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function  __construct() {
        $this->middleware(['auth', 'auth_admin']);
    }

    public function index() {
        return view('admin.dashboard');
    }

    public function getTeam() {
        $team = Team::all();
        return view('admin.team', compact('team'));
    }

    public function addMember() {
        return view('admin.addMember');
    }

    public function getBookedTables() {
        $tables = BookTable::all();
        return view('admin.bookedtable', compact('tables'));
    }

    public function completeAddMember() {
        
    }
}
