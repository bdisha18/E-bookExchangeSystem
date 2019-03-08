<?php
namespace App\Helper;

use Route;
use Auth;

class Common {

	public static function uploadImage($image, $path) {
        $path = public_path().'/'.$path;
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move($path, $filename);
        return $filename;
    }

    public static function checkImageExists($image, $path) {
        $path = public_path().'/'.$path.$image;
        if(file_exists($path) && ($image != "")){
            return true;
        }
        return false;
    }
}
