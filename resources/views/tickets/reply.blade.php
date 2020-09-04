<div class="panel panel-default">
<div class="panel-body">
<div class="comment-form">
<form action="{{url('comment')}}" method="post" class="form" enctype="multipart/form-data">@csrf
<input type="hidden" name="ticket_id" value="{{$ticket->id}}">
<input type="hidden" name="campus" value="{{$ticket->campus->name}}">
<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}"><br>
                        <textarea rows="3" col="5" id="comment" class="form-control login text-center" placeholder="     comment here.." name="comment"></textarea>
          <div class="image-upload ml-5" >
          <label for="file-input">
          <i class="far fa-image"></i>
          </label>

          <input id="file-input" name="image" type="file" onchange="readURL(this);" />
          
          </div>
          <img src="" id="comimg">
                        @if ($errors->has('comment'))
                            <span class="help-block">
                               <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
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