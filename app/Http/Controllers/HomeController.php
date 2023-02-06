<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\BookTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\reverseTableRequest;

class HomeController extends Controller
{
    public function identify() {
        if(auth()->check()){
            return redirect()->route('home');
        }
        return redirect()->route('welcome');
    }

    public function welcome() {
        $team = Team::all();
        return view('welcome', compact('team'));
    }

    public function admin_or_user() {
        if(auth()->user()->is_admin) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('user-home');
    }

    public function index() {
        return view('home');
    }

    public function reverseTable(reverseTableRequest $request) {
        $file_extention = $request->photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extention;
        $path = 'images/BookTableImages';
        $request->photo->move($path, $file_name);

        BookTable::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'people' => $request->people,
            'card' => Crypt::encryptString($request->card),
            'photo' => $file_name,
            'message' => $request->message,
        ]);
        
        return redirect()->back()->with('booked', 'The table has been booked successfuly');
    }
}
