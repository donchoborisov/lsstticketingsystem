
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suppor Ticket Status</title>
</head>
<body>
@extends('beautymail::templates.widgets')

@section('content')


	@include('beautymail::templates.widgets.articleStart')

		<h4 class="secondary"><strong>LSST Ticketing System</strong></h4>
<p>
   <b> Hello {{ ucfirst($ticketOwner->name) }}</b>,
</p>
<p>
    Your support ticket with ID <b>#{{ $ticket->ticket_id }}</b> has been marked as resolved and closed.
</p>
@include('beautymail::templates.widgets.articleEnd')


@stop
</body>
</html>