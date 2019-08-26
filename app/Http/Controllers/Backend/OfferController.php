<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Offers;
use App\Http\Controllers\Controller;
use App\Repositories\OfferRepository;

class OfferController extends Controller
{
    protected $offerRepository;
    
    public function __construct(OfferRepository $offerRepository) {
        $this->offerRepository = $offerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
              $offers = $this->offerRepository->index($request);
        return view('backend.offer.index', compact('offers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.offer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->offerRepository->store($request);
        return redirect()->route('offer.index')->with('status', 'Offer Created Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
                $offer = $this->offerRepository->find($id);
        return view('backend.offer.view', compact('offer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offers = Offers::all();
        $offer = $this->offerRepository->find($id);
//        dd($offer);
        return view('backend.offer.edit', compact('offer'));

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
       $this->offerRepository->update($request, $id);
        return redirect()->route('offer.index')->with('status', 'Updated Successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->offerRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }
}
