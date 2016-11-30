<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

class UserController extends Controller
{
    public function index(){
    	return view('users.index', ['users' => User::all()]);
    }
    public function eliminar($id){
    	User::destroy($id);
        return redirect('/usuarios');
    }
    public function crear(Request $request){
    	$user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $role = Role::where('name', 'User')->first();
        $user->roles()->attach($role);
        return redirect('/usuarios');
    }
    public function formulario(){
    	return view('users.formulario');
    }
    public function uploadRole(Request $request){
    	$user = User::find($request->id);
    	$user->roles()->detach();
    	if ($request->user_role) {
    		$user->roles()->attach(Role::where('name', 'User')->first());
    	}

    	if ($request->admin_role) {
    		$user->roles()->attach(Role::where('name', 'Admin')->first());
    	}
        return redirect('/usuarios');
    }
}
