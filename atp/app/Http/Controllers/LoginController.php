<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
	public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	
		
		

		$result = DB::table('users')->where('uname', $req->uname)
				->where('password', $req->password)
				->get();
		
		//echo $result[0]->type;

		if(count($result) > 0){
                 
			
			if( $result[0]->type=="admin")
			  {
			  	$req->session()->put('user', $req->uname);
			  	
				$req->session()->put('type', $result[0]->type);
				return redirect()->route('home.index');
		      }
		    else
		      {
		      	$req->session()->put('user', $req->uname);
		      	
				$req->session()->put('type', $result[0]->type);
		      	return redirect()->route('home.member');
		      }  
		}else{
			$req->session()->flash('msg', 'invalid uname or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
