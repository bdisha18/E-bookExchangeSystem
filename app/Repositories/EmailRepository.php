<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Email;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class EmailRepository extends BaseRepository
{
    public function model() {
        return "App\Model\Email";
    }

    public function index($request) {
        
        if($request->search){
            $email = Email::where([ 
                ['email_name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $email = Email::orderBy('id', 'desc')->paginate(10);
        }
            return $email;
    }

    public function store($request) {
         $input= array_filter(Input::all());
        Offers::create($input);
        return true;
    
        }


    public function update($request, $id) {
    
        $offer = Offers::findOrFail($id);
        $data = $request->all();
        $offer->update($data);
        return true;
    }
    
}
