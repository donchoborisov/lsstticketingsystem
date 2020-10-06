@extends('layouts.app')
@section('title',$ticket->title)
@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card faq">
               <div class="card-header">
              <b> #{{$ticket->ticket_id}}-{{$ticket->title}}</b>
               </div>
               <div class="card-body">
               @if(session('status')) 
               <span class="badge badge-primary">
               {{session('status')}}
             </span>
               @endif
             <div class="card-text">
             <b>Ticket message:</b> <div class="message faq">{{$ticket->message}}</div><hr>
             <p><b>Category:</b>  {{$ticket->category->name}}</p>
             <p><b>Priority: </b>
             @if($ticket->priority == "low")
            <span class="badge badge-pill badge-outline-success">{{$ticket->priority}}</span>
             @elseif($ticket->priority == "medium")
             <span class="badge badge-pill badge-outline-warning">{{$ticket->priority}}</span>

             @else
             <span class="badge badge-pill badge-outline-danger">{{$ticket->priority}}</span>
             @endif

              

             </p>
            
             @if($ticket->image == NULL)

             @else
             <div  class="text-center">
             <img  src="{{asset($ticket->image)}}" style="width:300px; margin-left: auto; margin-right: auto;" class="ticket"> 
             </div> 
             @endif
            
             <p>
                @if($ticket->status == 'Open')
                  <b>Status:</b>  <span class="badge badge-success">{{$ticket->status}}</span>
                @else
                <b>Status:</b> <span class="badge badge-danger">{{$ticket->status}}</span>
                @endif  
             </p>
             <p><b>Created by:</b> {{$ticket->user->email}}</p>
             <p><b>Campus:</b> {{$ticket->campus->name}}</p>
             <p><b>Created:</b> {{$ticket->created_at->diffForHumans()}}</p>

@php
$campus = $ticket->campus->name;
$campuses = DB::table('campuses')->where('name','!=',$campus)->get();
@endphp

         
             @if(Auth::user()->is_admin)
             <form id="assignform" method="POST" action="{{url('admin/assign/ticket/')}}">@csrf
             <input type="hidden" name="ticketid" value="{{$ticket->id}}">
             <select class="custom-select mr-sm-2" name="campusassign">
                <option value="">Assign to...</option>
                @foreach($campuses as $campus)
                <option value="{{$campus->id}}">{{$campus->name}}</option>

                @endforeach
              </select>
               <br>
               <br>
              <button id="assign" class="btn btn-info">Assign</button>
              </form> 
              <div class="error">
     @if ($errors->has('campusassign'))
    <span class="error" style="color:#FF0000;">
    <small><strong>{{ $errors->first('campusassign') }}</strong></small>
    </span>
    @endif
</div>
              @endif
              

      

            </div>
     

            


             






               </div>
              
                
                
            </div>
            <hr>
            @include('tickets.comments')
            <hr>
            @include('tickets.reply')
        </div>
    </div>
</div>
<script type="text/javascript">
   
$('#assignform').submit(function(){
    $("#assign", this)
      .html("Please Wait...")
      .attr('disabled', 'disabled');
    return true;
});
   
</script>

@endsection

