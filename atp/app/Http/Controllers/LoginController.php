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
		
		//$req->session()->put('abc', 'works!');
		//$req->session()->get('msg');
		//$req->session()->forget('msg');
		//$req->session()->flush();
		//$req->session()->has('msg')
		//$req->session()->flash('xyz', 'invalid username or password');
		//$req->session()->flash('pqr', 'invalid username or password');
		//$req->session()->keep('xyz');
		//$req->session()->reflash();
		//$data = $req->session()->all();

		//User::all();
		//$result = User::find(1);
		/*$result = User::where('username', $req->uname)
				->where('password', $req->password)
				->get();*/

		//DB::table('users')->get();

		$result = DB::table('users')->where('email', $req->email)
				->where('password', $req->password)
				->get();
		
		//echo $result[0]->type;

		if(count($result) > 0){
                 
			
			if( $result[0]->type=='admin')
			  {
			  	$req->session()->put('user', $req->uname);
			  	$req->session()->put('email', $req->email);
				$req->session()->put('type', $result[0]->type);
				return redirect()->route('home.index');
		      }
		    else
		      {
		      	$req->session()->put('user', $req->uname);
		      	$req->session()->put('email', $req->email);
				$req->session()->put('type', $result[0]->type);
		      	return redirect()->route('login.index');
		      }  
		}else{
			$req->session()->flash('msg', 'invalid uname or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
