<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 8/28/17
 * Time: 11:51 AM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class Functions extends Controller
{
 static function encode($id)
    {
        return Crypt::encrypt($id);

    }
 static function decode($id){
     return Crypt::decrypt($id);
 }
}