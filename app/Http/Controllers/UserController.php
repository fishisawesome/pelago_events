<?php namespace App\Http\Controllers;

use App\User;
use App\Nation;
use Request;

class UserController extends Controller {

	public function index()
	{
		return view('users.index');
	}

	public function jsonList()
	{
		return User::orderBy('created_at','desc')->get();
	}

	public function store()
	{
		$user = new User;
		$user->name = Request::input('name','');
		$user->telephone = Request::input('telephone','');

		$nation = Nation::find(Request::input('nation_id'));
		if($nation)
		{
			$user->nation()->associate($nation);
		}
		$user->save();


	}

	public function destroy($id)
	{
		$user = User::find($id);
		if($user)
		{
			$user->delete();
		}
	}
	
}