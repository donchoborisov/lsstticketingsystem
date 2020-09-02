<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
use DB;
use Response;

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

      public function Edit($id){
          
        $campus = DB::table('campuses')->where('id',$id)->first();

        return response::json($campus);

      }


      public function campusupdate(Request $request){

          $this->validate($request,[
             'kname'=>'required|string|max:30',
          ]);
             
           $id = $request->kid;
           $data['name'] = ucfirst($request->kname);
 
           $update = DB::table('campuses')->where('id',$id)->update($data);
           return redirect()->back()->with("status","Campus updated successfully");


      }


}
