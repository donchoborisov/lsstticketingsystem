@extends('layouts.app')
@section('title','All Tickets')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">

<div class="card-header">
<h3>Tickets</h3>
@if ($tickets->isEmpty())
     <p>There are currently no tickets</p>
</div>     
@else
<div class="card-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Title</th>
      <th scope="col">Priority</th>
      <th scope="col">Status</th>
      <th scope="col">Last Updated</th>
      <th style="text-align:center" scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tickets as $ticket)
    <tr>
      <td>
        {{$ticket->category->name}}
      </td>
      <td>
      <a href="{{url('tickets/'.$ticket->ticket_id)}}">
         #{{$ticket->ticket_id}} - {{$ticket->title}} 
      </td>
      <td>
       @if($ticket->priority == "low")
       <span class="badge badge-pill badge-outline-success">{{$ticket->priority}}</span>
       @elseif($ticket->priority == "medium")
       <span class="badge badge-pill badge-outline-warning">{{$ticket->priority}}</span>

       @else
       <span class="badge badge-pill badge-outline-danger">{{$ticket->priority}}</span>
       @endif
      
      
      </td>



      <td>
          @if($ticket->status == 'Open')
          <span class="badge badge-success">{{$ticket->status}}</span>
          @else
          <span class="badge badge-danger">{{$ticket->status}}</span>
          @endif
      </td>
      <td>
      {{$ticket->updated_at->diffForHumans()}}
      </td>
      <td>
        @if($ticket->status == 'Open')
        <form action="{{url('admin/close_ticket/'. $ticket->ticket_id)}}" method="POST">@csrf
        <a class="btn" href="{{url('tickets/' . $ticket->ticket_id)}}"  data-toggle="tooltip" data-placement="bottom"  title="Comment on this ticket" ><i class="fa fa-comment" id="comment"></i></a>
     
          <button type="submit" id="close" class="btn"  data-toggle="tooltip" data-placement="bottom"  title="Close this ticket" ><i class="fa fa-close" ></i>Close</button>

          </form>
        @endif
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>

 {{$tickets->render()}}
@endif


</div>
</div>
</div>
</div>
@endsection