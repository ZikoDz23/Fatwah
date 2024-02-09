<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowHomePage(){
        return view('login');
    }
    


public function register(Request $request){
 $incomingfields = $request -> validate([
    'firstname' =>['required'],
    'lastname' =>['required'],
    'email'=> ['required'],
    'password'=> ['required'],
 ]);

 User::create($incomingfields);

 return redirect('/');
}

public function login(Request $request){
    $incomingfields = $request->validate([
        'loginemail' => ['required'],
        'loginpassword' => 'required'

    
    ]);
    if(auth()->attempt(['email' => $incomingfields['loginemail'],'password'=> $incomingfields['loginpassword']])){
        $request->session()->regenerate();
        return redirect('/dashbord')->with('loged in sucessfuly');

    } else {
    return'failed';

    }
}
public function logout(){
    auth()->logout();
    return redirect('/');
}
//TO SHOW CHANGING AVATAR PAGE

}