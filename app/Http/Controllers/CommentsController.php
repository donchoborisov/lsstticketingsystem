<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use DB;
use Response;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;
use Image;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function ViewPicture($id){
           
        $comment = DB::table('comments')->where('id',$id)->first();

        $picture = asset($comment->image);

        return response::json([
              'image'=> $picture

        ]);
      }




    
    public function postComment(Request $request, AppMailer $mailer)
    {
          $this->validate($request,[
             'comment' => 'required|max:255',
             'image'=>'image|mimes:jpeg,png,jpg|max:2048',
          ]);

          $comment_image = $request->image;
        


         if($comment_image){  

            $comment_image_name = hexdec(uniqid()).'.'.$comment_image->getClientOriginalExtension();
            Image::make($comment_image)->resize(300,300)->save('img/'. $comment_image_name);
            $image = 'img/'.$comment_image_name; 
            
            //dd($image);
 
          $comment = Comment::create([
               'ticket_id'=> $request->ticket_id,
               'user_id'=> Auth::user()->id,
               'comment'=>$request->comment, 
               'campus'=>$request->campus,
               'image'=>$image,  
          ]);


          if($comment->ticket->user->id !== Auth::user()->id){
           
            $mailer->sendTicketComments($comment->ticket->user, Auth::user(), $comment->ticket, $comment );
        }


        if($comment->ticket->user->is_admin == '0'){
            $mailer->sendTicketCommentsAdmin($comment->ticket->user, Auth::user(), $comment->ticket, $comment );

        }



        notify()->success('Your comment has been submitted!');
        
        return redirect()->back(); //->with('status', 'Your comment has been submitted');

        } else{

            

     
            $comment = Comment::create([
                'ticket_id'=> $request->ticket_id,
                'user_id'=> Auth::user()->id,
                'comment'=>$request->comment, 
                'campus'=>$request->campus,  
           ]);

           if($comment->ticket->user->id !== Auth::user()->id){
           
            $mailer->sendTicketComments($comment->ticket->user, Auth::user(), $comment->ticket, $comment );
        }

        if($comment->ticket->user->is_admin == '0'){
            $mailer->sendTicketCommentsAdmin($comment->ticket->user, Auth::user(), $comment->ticket, $comment );

        }
        notify()->success('Your comment has been submitted!');
        return redirect()->back();  //->with('status', 'Your comment has been submitted');

    }

    
  
        
}

}