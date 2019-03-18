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

     public static function GenerateRandString($len, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') {
        $string = '';
        for ($i = 0; $i < $len; $i++) {
            $pos = rand(0, strlen($chars) - 1);
            $string .= $chars{$pos};
        }
        return $string;
    }


    public static function GenerateReferenceID() {
        unset($num);

        $num = self::GenerateRandString(15, "0123456789");

        $check = Transaction::where('reference_id', $num)->get();

        if (count($check) == 0) {
            return $num;
        } else {
            return GenerateReferenceID();
        }
    }

}
