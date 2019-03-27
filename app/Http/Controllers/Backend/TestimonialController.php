<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Testimonial;
use App\Http\Controllers\Controller;
use App\Repositories\TestimonialRepository;


class TestimonialController extends Controller
{
     protected $testimonialRepository;

    public function __construct(TestimonialRepository $testimonialRepository) {
        $this->testimonialRepository = $testimonialRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testimonials = $this->testimonialRepository->index($request);
        return view('backend.testimonial.index', compact('testimonials'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('backend.testimonial.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->testimonialRepository->store($request);
        return redirect()->route('testimonial.index')->with('status', 'Transaction Created Successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $testimonial = $this->testimonialRepository->find($id);
        return view('backend.transaction.view', compact('testimonial'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $testimonials = Testimonial::all();
        $testimonial = $this->testimonialRepository->find($id);
        return view('backend.testimonial.edit', compact('testimonial', 'testimonials'));
    
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
                $this->testimonialRepository->update($request, $id);
        return redirect()->route('testimonial.index')->with('status', 'Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->testimonialRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }
}
