<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Timses;
use Auth;
class LoginController extends Controller
{
 

  public function postLogin(Request $request)
  {
      
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required'
    ]);
      
    if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
      return redirect()->intended('/admin/dashboard');
    } else if (Auth::guard('pengurus')->attempt(['username' => $request->username, 'password' => $request->password])) {
      return redirect()->intended('/pengurus/dashboard');
    }else if (Auth::guard('mahasiswa')->attempt(['nim' => $request->username, 'password' => $request->password])) {
      return redirect()->intended('/mahasiswa/dashboard');
    }
    return redirect('/login');
  }

  public function signout()
  {
    if (Auth::guard('admin')->check()) {
      Auth::guard('admin')->logout();
    } else if (Auth::guard('pengurus')->check()) {
      Auth::guard('pengurus')->logout();
    }else if (Auth::guard('mahasiswa')->check()) {
      Auth::guard('mahasiswa')->logout();
    }
    return redirect('/login');
  }
  
}