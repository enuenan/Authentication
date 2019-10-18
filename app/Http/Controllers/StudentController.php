<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(Request $req)
    {
      $name = $req-> session() -> get('username');
      $email = $req-> session() -> get('user$email');
      $role = $req-> session() -> get('userrole');
      return view('student',['username' => $name, 'useremail' => $email, 'userrole' => $role]);
    }
}
