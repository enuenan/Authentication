<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Session;

class HomeController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function loginstore(Request $req)
    {
      $name = $req -> name;
      $password = md5($req -> password);

      $obj = Teacher::where('name', '=', $name)
                    ->where('password', '=', $password)
                    ->first();

      if ($obj) {
        $req -> session() -> put('userid', $obj->id );
        $req -> session() -> put('username', $obj->name );
        $req -> session() -> put('userrole', $obj->role );
        $req -> session() -> put('useremail', $obj->email );
        return redirect()->to('timeline');
      }
      else {
        return redirect()->to('unauthorized');
      }
    }
    public function home()
    {
      return view('home');
    }

    public function timeline(Request $req)
    {
      $user = $req-> session() -> get('username');
      $role = $req-> session() -> get('userrole');
      return view('timeline',['username' => $user, 'userrole' => $role]);
    }

    public function unauthorized()
    {
      return view('unauthorized');
    }

    public function logout()
    {
      session::flush();
      return redirect() -> to('login');
    }
}
