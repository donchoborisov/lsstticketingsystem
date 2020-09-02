
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support Ticket</title>
</head>
<body>

@extends('beautymail::templates.widgets')

@section('content')


	@include('beautymail::templates.widgets.articleStart')
    <h4 class="secondary"><strong>LSST Ticketing System</strong></h4>
    <p>
    <b>{{ $comment->comment }}</b>
</p>
 
---
<p>Replied by: <b>{{ $user->name }}</b></p>
 
<p>Title:<b> {{ ucfirst ($ticket->title) }}</b></p>
<p>Ticket ID: <b>{{ucfirst($ticket->ticket_id) }}</b></p>
<p>Status: <b>{{ ucfirst ($ticket->status) }}</b></p>
	

   @include('beautymail::templates.minty.button', ['text' => 'See ticket', 'link' => 'http://ticket.lsst.ac/tickets/'. $ticket->ticket_id])

	@include('beautymail::templates.widgets.articleEnd')


@stop










</body>
</html>
