<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Input;
use App\Model\Category;
use App\Helper\Common;

class CategoryRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model() {
        return "App\Model\Category";
    }

    public function store($request) {
        $input = $request->all();

        if($input['parent_id'] == NULl){
           $input['parent_id'] = 0;
        }
        if($request->image){
        $image = Common::uploadImage($request->image,env('CATEGORY_IMAGE_PATH'));
        $input['image'] = $image;
        }
        Category::create($input);

        return true;
    }

    public function index($request) {
    
        if($request->search){
           $categories = Category::where([ 
                ['category_name', 'LIKE', '%' . $request->search . '%'],
            ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $categories = Category::orderBy('id', 'desc')->paginate(10);
        }
        return $categories;
    }

    public function update_data($request, $id) {
        $input = $request->all();
        
        if($input['parent_id'] == NULL){
            $input['parent_id'] = 0;
        }
        $category = Category::findOrFail($id);
         if(Input::hasFile('image'))
        {
            $image = public_path().'/'.env('CATEGORY_IMAGE_PATH').$category->image;
                if (file_exists($image) && $category->image) { 
                    unlink($image);
                }
            $image = Common::uploadImage($input['image'],env('CATEGORY_IMAGE_PATH'));
            $input['image'] = $image;
   
        }
        $category->update($input);
        return true;
    }

    
}
