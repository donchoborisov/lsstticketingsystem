<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!-- ajax script link-->

<div class="comments">
@include('notify::messages')
    <x:notify-messages />
    @notifyJs
     @if($ticket->comments->isEmpty())
     <p class="text-center">no comments for this ticket</p>
     @else

     @foreach($ticket->comments as $comment)
        <div class="panel panel-@if($ticket->user->id === $comment->user_id){{"default"}} @else {{"success"}} @endif ">
            <div class="panel panel-heading">
                <b>{{ $comment->user->name }}</b>
 
                <span class="pull-right">{{ $comment->created_at->diffForHumans()}}</span>
            </div>
            
              @if($comment->user == Auth::user())
            <div class="message2 faq2">
        
                {{ $comment->comment }}

               
             <div id="comment">  
          @if($comment->image == NULL)

            @else
          <a href="#"  id="{{$comment->id}}" onclick="viewcommentpicture(this.id)" data-toggle="modal" data-target="#exampleModal" aria-hidden="true" ><img  src="{{asset($comment->image)}}" style="width:100px;margin-left:auto;margin-right:auto;" class="commentpicture"></a>  
          @endif
         </div>
            </div>
           
           
           
           
             @else  
             <div class="message2 faq1">
        
        {{ $comment->comment }}

       
     <div id="comment">  
  @if($comment->image == NULL)

    @else
  <a href="#"  id="{{$comment->id}}" onclick="viewpicture(this.id)" data-toggle="modal" data-target="#exampleModal" aria-hidden="true" ><img  src="{{asset($comment->image)}}" style="width:100px;margin-left:auto;margin-right:auto;" class="commentpicture"></a>  
  @endif
 </div>
    </div>



          @endif
        </div>
    @endforeach
    
  

     @endif  
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center" >
      <img id="cimage" src="">
 
      </div>
      <div class="modal-footer">
      
      
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function viewcommentpicture(id){
        $.ajax({
         url: "{{ url('/view/picture/') }}/"+id, 
         type: "GET",
         dataType:"json",
         success:function(data){
          
        $('#cimage').attr('src', data.image);
     
     }  
        })
    }

</script>
