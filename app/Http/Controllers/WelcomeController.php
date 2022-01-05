<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function post(Request $request){
      $cliente = new userModel();
      $cliente->email=$request->email;
      $cliente->contraseña=$request->password;
      $cliente->save();
      return redirect("/");
    }
}
