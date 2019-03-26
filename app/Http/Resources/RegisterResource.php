<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class RegisterResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'fname' => $this->fname,
            'lname' => $this->lname,
            'country' => Address::where('user_id', $this->user_id)->value($this->country);
            'email' => $this->email,
            'password' => $this->password,
            'gmail_link' => $this->gmail_link,
            'fb_link' => $this->fb_link
            'token' =>$this->token
        ];
    }
}


