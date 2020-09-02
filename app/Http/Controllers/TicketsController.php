<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Mailers\AppMailer;
use Illuminate\Support\Str;
use Image;
use DB;

class TicketsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('status','desc')->orderBy('updated_at','desc')->Simplepaginate(10);
        return view('tickets.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('tickets.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AppMailer $mailer)
    {
        $this->validate($request,[
          'title'=>'required|max:30',
          'category'=>'required',
          'priority'=>'required',
          'message'=>'required|max:500',
          'campus'=>'required',
          'image'=>'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $id = $request->campus;


        $ticket_image = $request->image;
    
        $idtitle = date("d-m-Y H:i:s");
        
        if($ticket_image){
       
        
       
       
         $ticket_image_name = hexdec(uniqid()).'.'.$ticket_image->getClientOriginalExtension();
        Image::make($ticket_image)->resize(300,300)->save('img/'. $ticket_image_name);
        $image = 'img/'.$ticket_image_name;  

        $wembley = 'doncho.borisov@lsst.ac';
        
         $ticket = new Ticket([
             'title' => $request->title,
             'user_id' => Auth::user()->id,
            'ticket_id' => $idtitle, //strtoupper(Str::random(10)),
             'category_id' => $request->category,
            'campus_id'=> $request->campus,
            'priority' => $request->priority,
             'image'=> $image,
            'message' => $request->message,
            'status' => "Open",
          ]);
          $ticket->save();
     



        $mailer->sendAdminInformation(Auth::user(),$ticket);            
        $mailer->sendTicketInformation(Auth::user(),$ticket);
        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
       



        }else{
       
         
        
         $ticket = new Ticket([
        
           'title' => $request->title,
           'user_id' => Auth::user()->id,
           'ticket_id' => $idtitle, //strtoupper(Str::random(10)),
           'category_id' => $request->category,
           'campus_id'=> $request->campus,
           'priority' => $request->priority,
         'message' => $request->message,
           'status' => "Open",
        
         ]);
        $ticket->save();
   

        $mailer->sendAdminInformation(Auth::user(),$ticket);
        $mailer->sendTicketInformation(Auth::user(),$ticket);
        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
       

    }
       

    

    }

    public function userTickets(){
        $tickets = Ticket::orderBy('status','desc')->orderBy('updated_at','desc')->where('user_id',Auth::user()->id)->Simplepaginate(10);
        return view('tickets.user_tickets',compact('tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id',$ticket_id)->firstOrFail();
        return view('tickets.show',compact('ticket'));
    }


    public function close ($ticket_id,AppMailer $mailer)
    {
       $ticket = Ticket::where('ticket_id',$ticket_id)->firstOrFail();
       $ticket->status = "Closed";
       $ticket->save();
       $ticketOwner = $ticket->user;
       $mailer->sendTicketStatusNotification($ticketOwner,$ticket);

       return redirect()->back()->with("status","The Ticket has been closed!");
    }

    public function campustickets(Request $request){
                
        $this->validate($request,[
            'Campus'=>'required',
        ]);

        $id= $request->Campus;
        
        $tickets = Ticket::orderBy('status','desc')->orderBy('updated_at','desc')->where('campus_id',$id)->simplePaginate(10);
        return view('tickets.campus_tickets',compact('tickets','id'));
      
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
