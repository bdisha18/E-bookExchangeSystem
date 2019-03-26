<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\EmailTemplate;
use Illuminate\Support\Facades\Input;

class EmailTemplateRepository extends BaseRepository
{
    public function model() {
        return "App\Model\EmailTemplate";
    }

    public function index($request) {
        
        if($request->search){
            $template = EmailTemplate::where([ 
                ['email_name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('template_id', 'desc')->paginate(10);
        }else{
            $template = EmailTemplate::orderBy('template_id', 'desc')->paginate(10);
        }
            return $template;
    }

    public function store($request) {
         $input= array_filter(Input::all());
         $template = EmailTemplate::create($input);
        return $template;
    
        }


    public function update($request, $id) {
    
        $template = EmailTemplate::findOrFail($id);
        $data = $request->all();
        $template->update($data);
        return true;
    }
    
}
