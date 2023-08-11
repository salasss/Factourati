<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function Index(){
        return view('admin.auth');

    }
    public function Dashboard(){
        return view('admin.dash');
    }
    public function login(Request $request){
      //  dd($request->all());
      $check = $request->all();
      if(Auth::guard('admin')->attempt(['email' =>$check['email'],
                                        'password' =>$check['password']])){
                                            return redirect()->route('admin.dashboard');
                                        }else{return back();}
    }

}
