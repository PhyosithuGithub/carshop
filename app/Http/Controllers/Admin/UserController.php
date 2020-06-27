<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function index(){
        $users =User::all();
        return view("backend.users.index",compact("users"));
    }

    public function edit($id){
        $user =User::whereId($id)->firstOrFail();
        $roles =Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray(); //We can get coz we decalre in User Model as HasRoles
        return view('backend.users.edit',compact('user','roles','selectedRoles'));
    }

    public function update(Request $request,$id){
       $user =User::whereId($id)->FirstOrFail();
       $user->syncRoles($request->get('role'));
       return redirect(action('admin\UserController@edit',$id))->with('status','Updated User Role Successfully!');
    }
}