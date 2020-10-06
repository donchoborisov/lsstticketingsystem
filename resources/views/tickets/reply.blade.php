<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="panel panel-default">
<div class="panel-body">
<div class="comment-form">
<form id="reply" action="{{url('comment')}}" method="post" class="form" enctype="multipart/form-data">@csrf
<input type="hidden" name="ticket_id" value="{{$ticket->id}}">
<input type="hidden" name="campus" value="{{$ticket->campus->name}}">
<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}"><br>
                        <textarea rows="3" col="5" id="comment" class="form-control login text-center" placeholder="     comment here.." name="comment"></textarea>
          <div class="image-upload ml-5" >
          <label for="file-input">
          <i class="far fa-image" title="Upload Picture" data-toggle="tooltip" data-placement="bottom"></i>
          </label>

          <input id="file-input"   name="image" type="file" onchange="readURL(this);" />
          
          </div>
          <img src="" id="comimg">
                        @if ($errors->has('comment'))
                            <span class="help-block">
                               <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button id="replysubmit" type="submit" class="btn btn-primary">Submit</button>
                    </div>







</form>





</div>







</div>
</div>

<script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#comimg')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
$('#reply').submit(function(){
    $("#replysubmit", this)
      .html("Please Wait...")
      .attr('disabled', 'disabled');
    return true;
});

</script>