<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Interest;
use App\Model\Category;
use App\Http\Controllers\Controller;
use App\Repositories\InterestRepository;

class InterestController extends Controller
{
    protected $interestRepository;

    public function __construct(InterestRepository $interestRepository) {
        $this->interestRepository = $interestRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $interests = $this->interestRepository->index($request);
        return view('backend.interest.index', compact('interests'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->interestRepository->store($request);
        return redirect()->route('interest.index')->with('status', 'Interests Created Successfully.');

    }
     public function create() {
        $categories = Category::all();
        return view('backend.interest.create', compact('categories'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interests = Interest::all();
        $categories = Category::all();
        $interest = $this->interestRepository->find($id);
        return view('backend.interest.edit', compact('interest', 'categories'));

    }
    public function view($id)
    {
        $interest = $this->interestRepository->find($id);
        return view('backend.interest.view', compact('interest'));
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
        $this->interestRepository->update($request, $id);
        return redirect()->route('interest.index')->with('status', 'Updated Successfully.');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->interestRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    
    }

}
