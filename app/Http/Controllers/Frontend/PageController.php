<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\contact;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
       public function contact()
       {	
           return view('frontend.pages.contact');
       }

       public function contact_store(Request $request){
       	$input = $request->all();
       	Contact::create($input);
       	return redirect()->route('user.contact');
       }

}
