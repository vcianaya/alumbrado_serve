<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function createUser(Request $request){
    $user = User::create($request->all());
    return $user;
  }
}
