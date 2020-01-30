<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $users = DB::table('users')->paginate(5);
        // $users = User::paginate( perPage: 2);
        return view('admin')->with('users',$users);
    }
    public function edit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('edit')->with('users',$users);
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->Role = $request->input('usertype');
        $users->update();

        return redirect('/admin')->with('status','Your Data Has Been Updated!');
    }
    public function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/admin')->with('status','Your Data Has Been Deleted!');
    }
}
