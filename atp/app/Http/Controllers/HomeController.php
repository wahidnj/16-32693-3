<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Menus;
use App\Restuarant;

use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\RestuarantRequest;
use App\Http\Requests\MenuRequest;

class HomeController extends Controller
{


    public function index(Request $req){
		return view('home.index');
	}

    public function addUser(){
    	return view('home.add');
    }

    public function createUser(UserRequest $req){

/*        $this->validate($req, [

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ]);*/

/*        $req->validate([

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ]);*/

/*        $validator = Validator::make($req->all(), [

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ])->validate();*/
        
        //$validator->validate();

        /*if($validator->fails()){

            //dd($validator);
            return back()
                    ->with('errors', $validator->errors());
        } */     

    	$users = new Users();
       
    	
        $users->uname = $req->uname;
        $users->email = $req->email;
        $users->type = "member";
        $users->contact = $req->contact;
    	$users->address = $req->address;
    	$users->password = $req->password;
    	
    	$users->save();

    	//$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
    	return redirect()->route('home.userlist');
    }

	public function details(){

		
		return view('home.details');
    }

    public function search(Request $req){

        
        $search = $req->get('search');
        $emp= DB::table('users')->where('uname',$search);
        return view('home.search', ['emp'=>$emp]);
    }

    // public function viewsearch(){

        
    //     return view('home.search');
    // }




    public function showUser(){

    	$userList = Users::all();

        //return json($stdlist);
    	return view('home.userlist', ['user'=> $userList]);
    }
	
	public function editUser($uid){

		$user = Users::find($uid);
		return view('home.edit', ['user'=>$user]);
    }

    public function updateUser(Request $req, $uid){

    	$users = Users::find($uid);

    	$users->uname = $req->uname;
        $users->email = $req->email;
        $users->contact = $req->contact;
        $users->address = $req->address;
        $users->password = $req->password;
   
    	$users->save();

		return redirect()->route('home.userlist');
    }
	public function deleteUser($uid){

		$user = Users::find($uid);
		return view('home.delete', ['user'=>$user]);
    }

    public function destroyUser($uid){

		Users::destroy($uid);
		return redirect()->route('home.userlist');
	}


    public function addRestuarant(){
        return view('home.add_restuarant');
    }

    public function createRestuarant(RestuarantRequest $req){


        $restuarant = new Restuarant();
       
        
        $restuarant->rname = $req->rname;
        $restuarant->location = $req->location;
      
        $restuarant->area = $req->area;
        $restuarant->goals = $req->goals;
       
        
        $restuarant->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('home.restuarantlist');
    }

    public function showRestuarant(){

        $restuarant = Restuarant::all();

        //return json($stdlist);
        return view('home.restuarant', ['restuarant'=> $restuarant]);
    }

    public function editRestuarant($rid){

        $restuarant = Restuarant::find($rid);
        return view('home.edit_restuarant', ['restuarant'=>$restuarant]);
    }

    public function updateRestuarant(Request $req, $rid){

        $restuarant = Restuarant::find($rid);

        $restuarant->rname = $req->rname;
        $restuarant->location = $req->location;
      
        $restuarant->area = $req->area;
        $restuarant->goals = $req->goals;
   
        $restuarant->save();

        return redirect()->route('home.restuarantlist');
    }

    public function deleteRestuarant($rid){

        $restuarant = Restuarant::find($rid);
        return view('home.delete_restuarant', ['restuarant'=>$restuarant]);
    }

    public function destroyRestuarant($rid){

        Restuarant::destroy($rid);
        return redirect()->route('home.restuarantlist');
    }


    public function addItem(){
        return view('home.add_item');
    }

    public function createItem(MenuRequest $req){


        $menus = new Menus();
       
        
        $menus->rname = $req->rname;
        $menus->mname = $req->mname;
      
        $menus->price = $req->price;
        $menus->details = $req->details;
       
        
        $menus->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('home.itemlist');
    }

    public function showItem(){

        $menus = Menus::all();

        //return json($stdlist);
        return view('home.item', ['menus'=> $menus]);
    }
    

    

    
       
}




