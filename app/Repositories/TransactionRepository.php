<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Transaction;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class TransactionRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Transaction";
    }

    public function index($request) {
        
        if($request->search){
            $transaction = Transaction::where([ 
                ['reference_id', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('transaction_id', 'desc')->paginate(10);
        }else{
            $transaction = Transaction::orderBy('transaction_id', 'desc')->paginate(10);
        }
            return $transaction;
    }

    public function store($request) {
        $input= array_filter(Input::all());
        $input['user_id'] = Auth::id();
        $input['reference_id'] = Common::GenerateReferenceID();
        Transaction::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $transaction = Transaction::findOrFail($id);
        $data = $request->all();
        $transaction->update($data);
        return true;
    }
}
