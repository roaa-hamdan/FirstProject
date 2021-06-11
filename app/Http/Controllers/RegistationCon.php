<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserT;
use App\Models\employ;

class RegistationCon extends Controller
{

    //
    public function Reg(Request $Req){
             $user=new UserT();
        $user->user_name = $Req->user_name;
        $user->password = $Req->password;
        $user->first_name = $Req->first_name;
        $user->last_name = $Req->last_name;
        $user->save();
        return redirect('welcome');


    }
    public function getdata(){
      //  echo "hee";
        return employ::all();
    }
}
