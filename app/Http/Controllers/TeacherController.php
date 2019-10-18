<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher(Request $req)
    {
      $name = $req-> session() -> get('username');
      $email = $req-> session() -> get('user$email');
      $role = $req-> session() -> get('userrole');
      return view('teacher',['username' => $name, 'useremail' => $email, 'userrole' => $role]);
    }
}
