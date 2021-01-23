<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Html;
use App\Css;
use App\Bootstrap;
use App\Php;
use App\Jquery;
use App\Laravel;
use App\Contact;
use App\Queries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function show(){
        $show = User::paginate(20);
        return view('admin.dashboard', ['shows' =>  $show]);
    }

    public function contact_us(){
        $show = Contact::paginate(20);
        return view('admin.contact_us', ['shows' =>  $show]);
    }

//    Html video Content

    public function Html(){
        $html = Html::all();
        return view('admin.Html' ,['html' => $html]);
    }

    public function Html_upload(Request $request){
     
   
    $Html = new Html();
    $Html->Html = $request->file('html');
    
   if($request->hasfile('html')){
   $file = $request->file('html');
   $extension = $file->getClientOriginalExtension();
   $filename = $file->getClientOriginalName();
   $file->move('Html',$filename);
   $Html->Html = $filename;
   }else{
       return $request;
       $Html->Html ='';
   }

     $Html->save();
    return   redirect('/admin/dashboard/Html')->with('msg' ,'file upload successfully');
    }
    
  public function Html_delete($id){
      $html = Html::findorfail($id);
      $html->delete();
      return redirect('/admin/dashboard/Html');
  }


//    Html video Content end

//    Css video Content
    public function Css(){
        $css = Css::all();
        return view('admin.Css',['css'=> $css]);
        return redirect('admin.Css');
    }

    public function Css_upload(Request $request){
     
   
    $Css = new Css();
    $Css->Css = $request->file('css');
    
   if($request->hasfile('css')){
   $file = $request->file('css');
   $extension = $file->getClientOriginalExtension();
   $filename = $file->getClientOriginalName();
   $file->move('Css',$filename);
   $Css->Css = $filename;
   }else{
       return $request;
       $Css->Css ='';
   }

     $Css->save();
    return   redirect('/admin/dashboard/Css')->with('msg' ,'file upload successfully');
    }

   public function Css_delete($id){
    $css = Css::findorfail($id);
    $css->delete();

    return redirect('/admin/dashboard/Css');

   }

//    Css video Content end
    

//    Bootstrap video Content
    public function Bootstrap(){
        $bootstrap = Bootstrap::all();
        return view('admin.Bootstrap',['bootstrap' => $bootstrap]);
    }

    public function Bootstrap_upload(Request $request){
     
   
    $Bootstrap = new Bootstrap();
    $Bootstrap->Bootstrap = $request->file('bootstrap');
    
   if($request->hasfile('bootstrap')){
   $file = $request->file('bootstrap');
   $extension = $file->getClientOriginalExtension();
   $filename = $file->getClientOriginalName();
   $file->move('Bootstrap',$filename);
   $Bootstrap->Bootstrap= $filename;
   }else{
       return $request;
       $Bootstrap->Bootstrap ='';
   }

     $Bootstrap->save();
    return   redirect('/admin/dashboard/Bootstrap')->with('msg' ,'file upload successfully');
    }

  public function Bootstrap_delete ($id){
      $bootstrap = Bootstrap::findorfail($id);
      $bootstrap->delete();
      return redirect('/admin/dashboard/Bootstrap');
  }
     
//    Bootstrap video Content end

//    Php video Content 
public function Php(){
    $php = Php::all();
    return view('admin.Php',['php' => $php]);
}

public function php_upload(Request $request){
 

$Php = new Php();
$Php->Php = $request->file('php');

if($request->hasfile('php')){
$file = $request->file('php');
$extension = $file->getClientOriginalExtension();
$filename = $file->getClientOriginalName();
$file->move('Php',$filename);
$Php->Php= $filename;
}else{
   return $request;
   $Php->Php ='';
}

 $Php->save();
return   redirect('/admin/dashboard/Php')->with('msg' ,'file upload successfully');
}

public function Php_delete ($id){
    $bootstrap = Php::findorfail($id);
    $bootstrap->delete();
    return redirect('/admin/dashboard/Bootstrap');
}

//    Php video Content end


//    Jquery video Content 
public function Jquery(){
    $jquery = Jquery::all();
    return view('admin.Jquery',['jquery' =>  $jquery]);
}

public function Jquery_upload(Request $request){
 

$Jquery = new Jquery();
$Jquery->JQuery = $request->file('jquery');

if($request->hasfile('jquery')){
$file = $request->file('jquery');
$extension = $file->getClientOriginalExtension();
$filename = $file->getClientOriginalName();
$file->move('JQuery',$filename);
$Jquery->JQuery= $filename;
}else{
   return $request;
   $Jquery->JQuery ='';
}

 $Jquery->save();
return   redirect('/admin/dashboard/Jquery')->with('msg' ,'file upload successfully');

}

public function Jquery_delete($id){
$jquery = Jquery::findorfail($id);
$jquery->delete();
return  redirect('/admin/dashboard/Jquery');

}



//    Jquery video Content end


//    Laravel video Content 
public function Laravel(){
    $laravel = Laravel::all();
    return view('admin.Laravel',['laravel' => $laravel]);
}

public function Laravel_upload(Request $request){
 

$Laravel= new Laravel();
$Laravel->Laravel = $request->file('laravel');

if($request->hasfile('laravel')){
$file = $request->file('laravel');
$extension = $file->getClientOriginalExtension();
$filename = $file->getClientOriginalName();
$file->move('Laravel',$filename);
$Laravel->Laravel= $filename;
}else{
   return $request;
   $Laravel->Laravel ='';
}

 $Laravel->save();
return   redirect('/admin/dashboard/Laravel')->with('msg' ,'file upload successfully');
}

public function Laravel_delete($id){
    $laravel = Laravel::findorfail($id);
    $laravel->delete();

    return   redirect('/admin/dashboard/Laravel');
}



//    Laravel video Content end

// for any queries 

public function Queries(){
    $queries = Queries::all();
    return view('admin.Post_queries',['queries' => $queries]);
}

public function Post_queries(Request $request){

    $queries = new Queries;
    $queries->message = $request->input('message');

    $queries->save();
 return redirect('/admin/dashboard/Post_queries')->with('msg','upload successfully');
}

public function Post_queries_delete($id){
    $queries = Queries::findorfail($id);
    $queries->delete();

    return redirect('/admin/dashboard/Post_queries')->with('mssg','queries successfully deleted');
}


// end for any queries 


}
