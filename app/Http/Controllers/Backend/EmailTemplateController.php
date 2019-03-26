<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\EmailTemplate;
use App\Http\Controllers\Controller;
use App\Repositories\EmailTemplateRepository;

class EmailTemplateController extends Controller
{
    protected $emailTemplateRepository;
    
    public function __construct(EmailTemplateRepository $emailTemplateRepository) {
        $this->emailTemplateRepository = $emailTemplateRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $templates = $this->emailTemplateRepository->index($request);
        return view('backend.template.index', compact('templates'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.template.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->emailTemplatesRepository->store($request);
        return redirect()->route('template.index')->with('status', 'Email Template Created Successfully.');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $template = $this->emailTemplateRepository->find($id);
        return view('backend.template.view', compact('template'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $templates = EmailTemplate::all();
        $template = $this->emailTemplateRepository->find($id);
        return view('backend.template.edit', compact('template'));

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
        $this->emailTemplateRepository->update($request, $id);
        return redirect()->route('template.index')->with('status', 'Updated Successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $this->emailTemplateRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    
    }
}
