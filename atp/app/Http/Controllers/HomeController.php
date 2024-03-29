<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Menus;
use App\Restuarant;
use App\Review;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\RestuarantRequest;
use App\Http\Requests\MenuRequest;

class HomeController extends Controller
{



    public function foodBlog(Request $req){
        return view('main.index');
    }

    

    public function index(Request $req){
		return view('home.index');
	}

    public function addUser(){
    	return view('home.add');
    }

    public function createUser(UserRequest $req){
   

    	$users = new Users();
       
    	
        $users->uname = $req->uname;
        $users->email = $req->email;
        $users->type = "member";
        $users->contact = $req->contact;
    	$users->address = $req->address;
    	$users->password = $req->password;
    	
    	$users->save();

    	//$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
    	echo "Registered Succesful" ;
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

    public function showMember(){

        $restuarant = Restuarant::all();

        //return json($stdlist);
        return view('home.member', ['restuarant'=> $restuarant]);
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


     public function editItem($mid){

        $menus = Menus::find($mid);
        return view('home.edit_item', ['menus'=>$menus]);
    }

    public function updateItem(Request $req, $mid){

        $menus = Menus::find($mid);

        $menus->rname = $req->rname;
        $menus->mname = $req->mname;
      
        $menus->price = $req->price;
        $menus->details = $req->details;
   
        $menus->save();

        return redirect()->route('home.itemlist');
    }

    public function deleteItem($mid){

        $menus = Menus::find($mid);
        return view('home.delete_item', ['menus'=>$menus]);
    }

    public function destroyItem($mid){

        Menus::destroy($mid);
        return redirect()->route('home.itemlist');
    }
    

    public function showResItem($rname){

        $menus = Menus::where('rname',$rname)->get();

       
        return view('home.member_item', ['menus'=> $menus]);
    }


    public function searchRestuarant(Request $req){

        $restuarant = Restuarant::where('rname',$req->rname)->get();

    
        return view('home.member_item', ['restuarant'=> $restuarant]);
    }
   
     public function reviewPage(){

        $restuarant = Restuarant::all();
        $menus = Menus::all();
        
        return view('home.food_review', ['restuarant'=> $restuarant],['menus'=> $menus]);
    }


     public function viewComment($rname){

        $restuarant = Restuarant::find($rname);
        return view('home.comment', ['restuarant'=>$restuarant]);
    }

    public function saveComment(Request $req,$rname){

        $review = new Review();
         
        $review->uname= "Jamir";
        $review->rname = $rname;
        $review->comment = $req->comment;
   
        $review->save();

        return redirect()->route('home.member');
    }

     public function showReview(){

        $review = Review::all();
      
        
        return view('home.review_list', ['review'=> $review]);
    }


    public function deleteReview($serialno){

        $review = Review::find($serialno);
        return view('home.delete_review', ['review'=>$review]);
    }

    public function destroyReview($serialno){

        Review::destroy($serialno);
        return redirect()->route('home.review_list');
    }
    

    
       
}




