<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Transaction;
use App\Http\Controllers\Controller;
use App\Repositories\TransactionRepository;

class TransactionController extends Controller
{
    
    protected $transactionRepository;

    public function __construct(TransactionRepository $transactionRepository) {
        $this->transactionRepository = $transactionRepository;
    }

  
    public function index(Request $request) {   

      $transactions = $this->transactionRepository->index($request);
        return view('backend.transaction.index', compact('transactions'));
    }

    public function create() {
        return view('backend.transaction.create');
    }

    public function store(Request $request) {
        // $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'fname' => 'required|max:20',
        // ]);
                
        $this->transactionRepository->store($request);
        return redirect()->route('transaction.index')->with('status', 'Transaction Created Successfully.');
    }

    public function view($id)
    {
        $transaction = $this->transactionRepository->find($id);
        return view('backend.transaction.view', compact('transaction'));
    }
    
    public function edit($id) {
        $transactions = Transaction::all();
        $transaction = $this->transactionRepository->find($id);
        return view('backend.transaction.edit', compact('transaction', 'transactions'));
    }

   
    public function update(Request $request, $id){
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->transactionRepository->update($request, $id);
        return redirect()->route('transaction.index')->with('status', 'Updated Successfully.');
    }

    public function delete($id) {
        $this->transactionRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }

     public function status() {
        $request = Input::all();
        $this->transactionRepository->update($request, $request['transaction_id']);
    }
 
}
