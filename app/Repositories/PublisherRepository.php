<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Document;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class PublisherRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Document";
    }

    public function index($request) {
        
        if($request->search){
            $publisher = Document::where([ 
                ['title', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $publisher = Document::orderBy('id', 'desc')->paginate(10);
        }
            return $publisher;
    }

    public function store($request) {
        $input= array_filter(Input::all());
        $input['user_id'] = Auth::id();
        if($request->file){
            // dd($request->file);
        $file = Common::uploadImage($request->file,env('PUBLISHED_IMAGE_PATH'));
        $input['file'] = $file;
        }
        Document::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $publisher = Document::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('file'))
        {
            $file = public_path().'/'.env('PUBLISHED_IMAGE_PATH').$publisher->file;
                if (file_exists($file) && $publisher->file) { 
                    unlink($file);
                }
            $file = Common::uploadImage($input['file'],env('PUBLISHED_IMAGE_PATH'));
            $input['file'] = $file;
   
        }
        $publisher->update($input);
        return true;
    }
}
