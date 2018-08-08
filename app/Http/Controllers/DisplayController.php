<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Personal_info;
use Illuminate\Support\Facades\DB;

class DisplayController extends Controller
{
    public function show() {
    	$user = User::all();
    	
    	//$personal_info = Personal_info::where('user_id', 1);
    	$personal_info = DB::select('select * from personal_infos where user_id = ?', [1]);

    	return view('app-views.index', ['user' => $user, 'personal_info' => $personal_info]);
    }
}
