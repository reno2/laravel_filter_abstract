<?php

namespace App\Http\Controllers;

use App\User;

use App\UserFilter;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request, UserFilter $filters){



		    $users = User::with('info')->filter($filters)->latest()->get();

				//dd($u);
			//	$users = (new UserFilter($users, $request))->apply()->get();
				if($request->expectsJson()){
						return response()->json($users->toArray());
				}
    		return view('users.index', compact('users'));
    }
}
