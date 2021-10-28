@extends('layouts.app')
@section('title','Results')

@section('content')




<div class="container-fluid">

 <div class="col-md-8 mx-auto">



<table class="table table-striped table-hover">
  
  </table>
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Access Level</th>
      </tr>
    </thead>

    <tbody>
 @forelse ($email as $user) 
      <tr>
        <td><a href="{{route('user.edit',$user->id)}}">{{$user->username}}</a></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @if($user->is_admin == '0')
        <td><span class="badge badge-pill badge-primary">User</span></td>
   
        @elseif($user->is_admin == '1') 
        <td><span class="badge badge-pill badge-success">Admin</span></td>

        @else
        <td><span class="badge badge-pill badge-warning">Super Admin</span></td>

        @endif
         
      </tr>
          
@empty
      <tr>
      
        <td>No Users Found</td>
      
      </tr>
@endforelse
  
    </tbody>
  </table>
  


 

 



</div>

</div>



@endsection