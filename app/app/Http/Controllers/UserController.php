<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
// signup
  public function user_token(Request $request){
     $name = $request->input('name');
     $password = $request->input('password');
     $email = $request->input('email');
     echo $name;
  }

}
