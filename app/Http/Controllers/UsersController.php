<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function userview($name){

        if(view()->exists('users1')){
        return view('users',["user"=>$name]);
        }
        else {
            return   $name. "   ".  "this view is not exisits";

}
        }
}