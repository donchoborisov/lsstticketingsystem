@extends('layouts.app')
@section('title')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card faq">
               <div class="card-header">
              <b>User Access Level </b>
               </div>
               <div class="card-body">
              
             <div class="card-text">
             <b class="text-muted">User Information</b> 
             <div class="">
                <p class="text-muted"><b>Name:</b> {{$user->name}} </p>
                <p class="text-muted"><b>Email:</b> {{$user->email}}  </p>
                <p class="text-muted"><b>Access Level:</b>
                @if($user->is_admin == '0')
        <td><span class="badge badge-pill badge-primary">User</span></td>
   
        @elseif($user->is_admin == '1') 
        <td><span class="badge badge-pill badge-success">Admin</span></td>

        @else
        <td><span class="badge badge-pill badge-warning">Super Admin</span></td>

        @endif
                      
      </p>
      </div>
      <hr>
      </p>
                 
     <form id="roleassignform" method="POST" action="{{route('user.assign',$user->id)}}">@csrf
      <select class="custom-select mr-sm-2" name="roleassign">
        <option {{$user->is_admin == '0' ? "selected":'' }} value="0" >User</option>
        <option {{$user->is_admin == '1' ? "selected":'' }} value="1">Admin</option>
        <option {{$user->is_admin == '2' ? "selected":'' }} value="2">Super Admin</option>
     </select>
               <br>
               <br>
              <button id="roleassign" class="btn btn-info">Assign</button>
              </form> 
              
 
</div>
 </div>
</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   
$('#roleassignform').submit(function(){
    $("#roleassign", this)
      .html("Please Wait...")
      .attr('disabled', 'disabled');
    return true;
});
   
</script>




@endsection     






