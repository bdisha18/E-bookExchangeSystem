<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Contact;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository) {
        $this->contactRepository = $contactRepository;
    }

  
    public function index(Request $request) {   

      $contacts = $this->contactRepository->index($request);
        return view('backend.contact.index', compact('contacts'));
    }


    public function view($id)
    {
        $contact = $this->contactRepository->find($id);
        return view('backend.contact.view', compact('contact'));
    }
    

    public function delete($id) {
        $this->contactRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }

 
}
