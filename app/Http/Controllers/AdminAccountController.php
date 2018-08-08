<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Personal_info;
use Carbon\Carbon;
use View;
use Image;

class AdminAccountController extends Controller
{
    public function admin_login()
    {
    	return view('app-views.admin-login');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }

    public function admin_auth(Request $request)
    {
    	$username = $request->username;
    	$password = $request->password;
		
    	$users = User::where('username', $username)->get();

        //echo count($users);

        if(count($users) == 0) {
            return redirect('/admin-login')->with('status', 'Wrong account info');
        }

        foreach($users as $user) {
            
                if(Hash::check($password, $user->password)) {

                session(['username' => $user->username, 'email' => $user->email, 'fname' => $user->fname, 'lname' => $user->lname]);
                return redirect('/dashboard');
            } else {
                    return redirect('/admin-login')->with('status', 'Wrong account info');
                }
        }


    	//return view('app-views.test')->with(['users' => $users]);
    	
    }

    public function admin_register()
    {
    	return view('app-views.admin-register');
    }

    public function store_admin_data(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('admin-register')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$user = new User();
    	$timeNow = Carbon::now();

    	$user->fname = $request->fname;
    	$user->lname = $request->lname;
    	$user->email = $request->email;
    	$user->username = $request->username;
    	$user->password = Hash::make($request->password);
    	$user->last_login = $timeNow->toDateTimeString();
    	$user->save();

    	return redirect('admin-login');
    }

    public function dashboard() {
        return view('app-views.account');
    }

    public function admin_personal_data(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'country' => 'required',
            'city' => 'required',
            'area' => 'required',
            'bio' => 'required',
            'picture' => 'required',

        ]);

        if($validator->fails()) {
            return redirect('/dashboard')->withErrors($validator)->withInput();
        }
        
        

        
            $avatar = $request->picture;
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)-> save(public_path('/uploads/avatars/' . $filename));
        

        $user = User::where('username', session('username'))->get();
        //print_r($user);
        foreach($user as $item) {
            $userId = $item->user_id;
        }
        $personal_info = new Personal_info();
        $personal_info->user_id = $userId;
        $personal_info->date_of_birth = $request->year . '-' . $request->month . '-' .  $request->day;
        $personal_info->country = $request->country;
        $personal_info->city  = $request->city;
        $personal_info->area = $request->area;
        $personal_info->mobile = $request->mobile;
        $personal_info->bio = $request->bio;
        echo $filename;
        $personal_info->personal_photo = $filename;
        $personal_info->current_position = $request->current_position;
        $personal_info->save();
        return redirect('/');
    }
}
