<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }
    
    public function index(Request $request)
    {
       
        $categories = $this->categoryRepository->index($request);
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
                
         $this->categoryRepository->store($request);
         return redirect()->route('category.index')->with('status', 'Category Created Successfully.');
    }

   
    public function show($id)
    {
       $category = $this->categoryRepository->find($id);
        return view('backend.category.view', compact('category'));
    }

    
    public function edit($id)
    {
        $categories = Category::all();
        $category = $this->categoryRepository->find($id);
        return view('backend.category.edit', compact('category', 'categories'));
    }

   
    public function update(Request $request, $id)
    {
        
        $this->categoryRepository->update_data($request, $id);
        return redirect()->route('category.index')->with('status', 'Updated Successfully.');
    }

    public function delete($id)
    {
        $this->categoryRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }


}
