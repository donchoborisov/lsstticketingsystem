@extends('layouts.app')
@section('title',$ticket->title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
             <b>Ticket message:</b> <div class="message">{{$ticket->message}}</div><hr>
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
             <img src="{{asset($ticket->image)}}" class="ticket">  
             @endif

             <p>
                @if($ticket->status == 'Open')
                  <b>Status:</b>  <span class="badge badge-success">{{$ticket->status}}</span>
                @else
                <b>Status:</b> <span class="badge badge-danger">{{$ticket->status}}</span>
                @endif  
             </p>
             <p><b>Created by:</b> {{$ticket->user->name}}</p>
             <p><b>Campus:</b> {{$ticket->campus->name}}</p>
             <p><b>Created:</b> {{$ticket->created_at->diffForHumans()}}</p>
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
@endsection