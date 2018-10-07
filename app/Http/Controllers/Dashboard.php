<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{

    public function index()
    {
        $users=User::all();
            return view('dashboard.user.show',['Users' => $users]);
    }

    public function userIndex()
    {
        $data=User::all();
        return view('dashboard.user.show',['users' => $data]);
    }

    public function userCreate()
    {
        return view('dashboard.user.add');
    }

    public function userStore(Request $request)
    {
        $users = new User;
        $users->full_name     = $request->full_name;
        $users->email         = $request->email;
        $users->phone_number  = $request->phone_number;
        $users->password      = $request->password;
        $users->role          = $request->role;
        $users->save();
        return redirect('dashboard/user/show');
    }

    public function userEdit($id)
    {
        $users = User::find($id);

        if(!$users)
            abort(404);
        return view('dashboard.user.edit',['users' => $users]);
    }

    public function userUpdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->full_name     = $request->full_name;
        $users->email         = $request->email;
        $users->phone_number  = $request->phone_number;
        //$users->password      = Hash::make($request->password);
        //$users->role          = $request->role;
        $users->save();
        return redirect('dashboard/user/show');
    }

    public function userDestroy($id)
    {
        $users =   User::find($id);
        $users->delete();
        return redirect('dashboard/user/show');
    }
}