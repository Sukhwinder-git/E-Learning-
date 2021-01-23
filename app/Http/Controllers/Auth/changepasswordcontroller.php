<?php

namespace App\Http\Controllers\Auth;
use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class changepasswordcontroller extends Controller
{
    public function index(){
        return view('auth.passwords.change');
    }

    public function changepassword(Request $request){
      $this->validate($request,[
       'oldpassword' => 'required',
       'password' =>  'required|confirmed'
        
      ]);

      $hashpassword = Auth::user()->password;
      if(Hash::check($request->oldpassword,$hashpassword)){
      $user = user::find(Auth::id());
      $user->password = Hash::make($request->password);
      $user->save();
      Auth::logout();
      return redirect()->route('login')->with('msg','password changed sucessfully');
      }
      else{
          return redirect()->back()->with('errormsg','current password is invalid');
      }


    }


}
