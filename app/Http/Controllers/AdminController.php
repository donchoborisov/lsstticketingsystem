<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    

    public function index() {

        return view ('admin.users');
    }


    public function search(Request $request) {

        $this->validate( $request,[
            'email'=>'required|email||regex:/(.*)@lsst\.ac/i',
  
            ]);


            $keyword = $request->get('email');

            if($keyword) {
    
                $email = User::where('email','LIKE','%'.$keyword.'%')->paginate(10);
                
                 
                
                
            } 

            return view('admin.results',compact('email')); 
    }



    public function edit($id) {
         
        $user = User::find($id);


        return view('admin.user_edit',compact('user'));
    }


    public function role(Request $request, $id) {

        $user = User::where('id',$id)->update(['is_admin' => $request->roleassign]);
        
         return redirect()->back();

    }

}
