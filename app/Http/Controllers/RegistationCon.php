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

    function saveData(Request $req){
      $employ=new employ();
      $employ->name = $req->name;
      $employ->id = $req->id;
      $employ->phone = $req->phone;
      $employ->address = $req->address;
      $employ->save();
     // return redirect('login');


  }

    public function getdata(){
        return employ::all();
    }
    public function updateDataa($id){
      
        $emp= employ::find($id);
     
        return  $emp;
    }
    public function create($n,$nn,$mmm,$m )
    {
       
      $employ = new employ([
        'name' => $m,
        'id' => $mmm,
        'phone' => $n,
        'address' => $nn,
    ]);
    $employ->save();

    return response()->json('Product created!');
    }
}
