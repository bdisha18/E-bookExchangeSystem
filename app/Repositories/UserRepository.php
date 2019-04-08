<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Member;
use App\Model\Interest;
use App\Model\Favourite;
use App\Model\Book;
use App\Model\Cart;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;


class UserRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Member";
    }

    public function index($request) {
        
        if($request->search){
            $user = Member::where([ 
                ['fname', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('user_id', 'desc')->paginate(10);
        }else{
            $user = Member::orderBy('user_id', 'desc')->paginate(10);
            
        }
            return $user;
    }

    public function store($request) {
        $input= array_filter(Input::all());

        if($request->image){
        $image = Common::uploadImage($request->image, env('USER_IMAGE_PATH'));
        $input['image'] = $image;
        }
        if(isset($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        }
        Member::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $user = Member::findOrFail($id);
        $input= array_filter(Input::all());
        $input['dob'] = date('Y-m-d', strtotime($request->dob));

        if(Input::hasFile('image'))
        {
        $image = public_path().'/'.env('USER_IMAGE_PATH').$user->image;
        if (file_exists($image)) { 
            unlink($image);
        }
        $image = Common::uploadImage($input['image'],env('USER_IMAGE_PATH'));
        $input['image'] = $image;
   
        }
        if (empty($request->get('password'))){

            $user->update($input, $request->except('password'));
        }else{
            
            $input['password'] = bcrypt($request->password);

            $user->update($input);

        }
        return $input;
    }


    public function users_interest($id){
        $user = Member::findOrFail($id);
        $user_interest = Interest::where('user_id', $id)->get();
        return $user_interest;
    }
    
     public function users_favorite($id){
        $user = Member::findOrFail($id);
        $user_favorite = Favourite::where('user_id', $id)->get();
        return $user_favorite;
    }
    
    public function user_favorite_view($id)
    {
         $book = Book::findOrFail($id);
//                 dd($user);

        $favorites = Favourite::where('book_id', $id)->get();
       // dd($favorites);
        foreach($favorites as $favorite ){
       $user_favorite_view = Book::where('book_id', $favorite->book_id)->get();
        }
        return $user_favorite_view;
    }

    public function user_cart($id)
    {
       $user = Member::findorFail($id);
               //    dd($user);

       $cart = Cart::where(['user_id'=>$user->user_id])->get();
      // $cart->count();
//       dd($cart);
      // $book = Book::where(['book_id'=>$cart->book_id])->get();
        //    dd($book);

        return $cart;
    }

    public function view($id)
    {
         $user = Member::findOrFail($id);
        $user_view = Interest::where('user_id',$user->user_id)->get();
        return $user_view;
    }
}
