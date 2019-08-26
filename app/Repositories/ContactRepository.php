<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Contact;
use Illuminate\Support\Facades\Input;

class ContactRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Contact";
    }

    public function index($request) {
        
        if($request->search){
            $contact = Contact::where([ 
                ['name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $contact = Contact::orderBy('id', 'desc')->paginate(10);
        }
            return $contact;
    }

}
