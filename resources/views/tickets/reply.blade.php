<div class="panel panel-default">
<div class="panel-body">
<div class="comment-form">
<form action="{{url('comment')}}" method="post" class="form">@csrf
<input type="hidden" name="ticket_id" value="{{$ticket->id}}">
<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                        <textarea rows="3" col="5" id="comment" class="form-control login text-center" placeholder="     comment here.." name="comment"></textarea>
 
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