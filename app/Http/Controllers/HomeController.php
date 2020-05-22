<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $pagetype="index";
        return view('web/home')->with(compact('pagetype'));
    }
}
?>