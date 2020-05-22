<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Helpers\Helpers;
use Session;
use DB;
use \GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use \GuzzleHttp\Exception\RequestException;

class SessionController extends Controller{
    public function logout(){
        Session::forget('userID', 'email','name','Role_Id');
        Session::flush();
        return redirect()->away('/');
    }  
    public function login(Request $request){
        $userId=$request->input('username'); 
        $user = DB::table('users')->where('email', $userId)->first();
        if($user!=""){ 
            if (Hash::check($request->input('password'), $user->password)){
                Session::put('userID', $user->Id);  
                Session::put('email', $user->email);  
                Session::put('name', $user->name);  
                Session::put('Role_Id', $user->Role_Id);  
                echo"Success";
            }
            else{ 
                $message="Your password is incorrect, pleas provide correct password";
                echo $message;
            }
        }
        else{
            $message="You have provided invalid email or iuser name. pelase check and try again";
           echo $message;
        }
    }
    public function dashboard(){
        $_role = Session::get('email');
        if($_role!=""){
            $pagetype="dashboard";
            return view('admin/index')->with(compact('pagetype'));
        }
        else{
            return redirect()->away('/logincomp');
        }
    }
    public function userdetails(){
        $userId=Session::get('userID');
        $query = DB::table('users as a')
        ->join('t_role_master as r', 'a.Role_Id', '=', 'r.Role_Id')
        ->select('r.Role_Name','a.name','a.email')
        ->where('a.Id', '=',  $userId)->first();
        return ['data' => $query];
    }
}
