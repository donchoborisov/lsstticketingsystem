<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

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
    
}
