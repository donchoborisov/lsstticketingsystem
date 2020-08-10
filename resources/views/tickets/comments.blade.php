
<div class="comments">
     @if($ticket->comments->isEmpty())
     <p class="text-center">no comments for this ticket</p>
     @else

     @foreach($ticket->comments as $comment)
        <div class="panel panel-@if($ticket->user->id === $comment->user_id){{"default"}} @else {{"success"}} @endif ">
            <div class="panel panel-heading">
                <b>{{ $comment->user->name }}</b>
 
                <span class="pull-right">{{ $comment->created_at->diffForHumans()}}</span>
            </div>
 
            <div class="message2">
                {{ $comment->comment }}
            </div>
        </div>
    @endforeach
    
  
     

    @endif
</div>