<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Email;
use App\Http\Controllers\Controller;
use App\Repositories\EmailRepository;

class EmailController extends Controller
{
    protected $emailRepository;
    
    public function __construct(EmailRepository $emailRepository) {
        $this->emailRepository = $offerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = $this->emailRepository->index($request);
        return view('backend.email.index', compact('emails'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                        return view('backend.email.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->emailRepository->store($request);
        return redirect()->route('email.index')->with('status', 'Email Created Successfully.');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $email = $this->emailRepository->find($id);
        return view('backend.email.view', compact('email'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emails = Email::all();
        $email = $this->emailRepository->find($id);
        return view('backend.email.edit', compact('email'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->emailRepository->update($request, $id);
        return redirect()->route('email.index')->with('status', 'Updated Successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $this->emailRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    
    }
}
