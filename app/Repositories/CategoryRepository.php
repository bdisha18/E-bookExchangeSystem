<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
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
        $data = $request->all();

        if($data['parent_id'] == NULl){
           $data['parent_id'] = 0;
        }
        Category::create($data);

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
        $data = $request->all();
        
        if($data['parent_id'] == NULL){
            $data['parent_id'] = 0;
        }
        $category = Category::findOrFail($id);
        $category->update($data);
        return true;
    }

    
}
