<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class FooterController extends Controller
{
    public function privacy(){
    return view('site_link.privacy');
    }
    
    public function contact_us(){
    return view('site_link.contact_us');
    }

    public function contact_upload(Request $request){

         $contact = new Contact();
         $contact->name = $request->input('name');
         $contact->email = $request->input('email');
         $contact->subject = $request->input('subject');
         $contact->message = $request->input('message');

         $contact->save();


        return redirect('/contact_us')->with('msg','Thanks with contacting us. We will help you as soon as possible');
        }
        
    
    public function about_us(){
    return view('site_link.about_us');
    } 

    public function Terms_and_condition(){
    return view('site_link.Terms_and_condition');
    }
   
            


}
