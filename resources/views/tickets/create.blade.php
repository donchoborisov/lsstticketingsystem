@extends('layouts.app')
 
@section('title', 'Open Ticket')
 
@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <div class="container">
    <div class="row justify-content-center" >
   
        <div class="col-md-8 ">
            <div class="card faq">
                <div class="card-header"><b>Open New Ticket</b></div>
 
                <div class="card-body">
 
 
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    <form id="CreateForm" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">@csrf
                     
 
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label"><b>Ticket Title</b></label>
 
                            <div class="col-md-8">
                                <input id="title" placeholder="Ticket Title" type="text" class="form-control" name="title" value="{{ old('title') }}">
 
                                @if ($errors->has('title'))
                                <span class="error" style="color:#FF0000;">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                            
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label"><b>Category</b></label>
 
                            <div class="col-md-8">
                                <select id="category" type="category" class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
 
                                @if ($errors->has('category'))
                                      <span class="help-block" style="color:#FF0000;">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label"><b>Priority</b></label>
 
                            <div class="col-md-8">
                                <select id="priority" type="" class="form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
 
                                @if ($errors->has('priority'))
                                <span class="help-block" style="color:#FF0000;">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('campus') ? ' has-error' : '' }}">
                            <label for="campus" class="col-md-4 control-label"><b>Campus</b></label>
                            @php
                            $campuses = DB::table('campuses')->get();
                             @endphp

 
                            <div class="col-md-8">
                                <select id="campus" type="" class="form-control" name="campus">
                                    <option value="">Select Campus</option>
                                    @foreach($campuses as $campus)
                                    <option value="{{$campus->id}}">{{$campus->name}}</option>
                                     @endforeach
                                </select>
 
                                @if ($errors->has('campus'))
                                <span class="help-block" style="color:#FF0000;">
                                        <strong>{{ $errors->first('campus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label"><b>Image</b></label>
 
                            <div class="col-md-8">
                                <input id="title" placeholder="Title" type="file" class="form-control" name="image" onchange="readURL(this);">
                                <span class="custom-file-control"></span>
                                <img src="" id="one">
                            
                        </div>
 
                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label"><b>Message</b></label>
 
                            <div class="col-md-8">
                                <textarea rows="10" id="message" class="form-control" placeholder="Message.." name="message" >
                               {{ old('message') }} 
                                </textarea>
 
                                @if ($errors->has('message'))
                                <span class="help-block" style="color:#FF0000;">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" id="create" class="btn btn-danger">
                                    <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                </button>
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
    </div>

 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script type="text/javascript">
   
$('#CreateForm').submit(function(){
    $("#create", this)
      .html("Please Wait...")
      .attr('disabled', 'disabled');
    return true;
});
   
</script>

@endsection
