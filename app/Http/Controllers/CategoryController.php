<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Response;
use DB;

class CategoryController extends Controller
{
    public function create(Request $request){

        $this->validate( $request,[
          'category'=>'required|string|max:30',

          ]);
    
            $campus = new Category([
             'name' => ucfirst($request->category),
            ]);
    
            $campus->save();
    
            return redirect()->back()->with("status", "Category added successfully!");
    
      }

      public function delete($id){

        $category = Category::where('id',$id)->firstorfail();
        $category->delete();

        return redirect()->back()->with('delete',"Category Deleted Successfully");

      }

          public function Edit($id){
          $product = DB::table('categories')->where('id',$id)->first();

         

          return response::json($product);

        }

        public function categoryupdate(Request $request){
               $this->validate($request,[
                'cname'=>'required|string|max:30',

               ]);

               $id=$request->cid;
             
               $data['name'] =  $request->cname;
               
               //dd($data);
               $update = DB::table('categories')->where('id',$id)->update($data);

               return redirect()->back()->with("status", "Category updated successfully!");

        }
    
}
