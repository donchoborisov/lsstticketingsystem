<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;

class CampusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(Request $request){
          
        $this->validate( $request,[
          'campus'=>'required|string|max:30',

          ]);

          $campus = new Campus([
           'name' => ucfirst($request->campus),
          ]);

          $campus->save();

          return redirect()->back()->with("status", "Campus added successfully!");

    }

    public function delete($id){
         $campus = Campus::where('id',$id)->firstorfail();

         $campus->delete();

         return redirect()->back()->with("delete","Campus deleted successfully");



    }


}
