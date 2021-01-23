<?php

namespace App\Http\Controllers;
use App\Html;
use App\Css;
use App\Bootstrap;
use App\Jquery;
use App\Php;
use App\Laravel;
use App\Queries;
use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function Home(){
    return view('welcome');
    }

    public function Html(){
        $show = Html::all();
        $queries = Queries::all();
    return view('tutorials.html'  ,['Html' => $show,'queries' => $queries]) ;
    }

  

    public function Css(){
        $show = Css::all();
        $queries = Queries::all();
    return view('tutorials.css'  ,['Css' => $show,'queries' => $queries]) ;
   
    }
    
    public function Bootstrap(){
        $show = Bootstrap::all();
        $queries = Queries::all();
        return view('tutorials.bootstrap'  ,['Bootstrap' => $show ,'queries' => $queries]) ;
    }

    public function Php(){
        $show = Php::all();
        $queries = Queries::all();
        return view('tutorials.php'  ,['Php' => $show,'queries' => $queries]) ;
    }

    public function Jquery(){
        $show = Jquery::all();
        $queries = Queries::all();
        return view('tutorials.jquery'  ,['Jquery' => $show,'queries' => $queries]) ;
    }

    public function Laravel(){
        $show = Laravel::all();
        $queries = Queries::all();
        return view('tutorials.laravel'  ,['Laravel' => $show,'queries' => $queries]) ;
     }
        
    
     
        



}
