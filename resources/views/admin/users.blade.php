@extends('layouts.app')
@section('title','Search Users')

@section('content')




<div class="container-fluid">

 <div class="col-md-8 mx-auto"> 

<div class="card">
    <div class="card-header font-weight-bold">Users Control</div>
<div class="card-body">

<form action="{{route('users.search')}}" method="get">@csrf


<div class="mb-3" {{ $errors->has('name') ? 'has-error' : '' }}>
  <label for="exampleFormControlInput1" class="form-label">Search Users by email</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@lsst.ac">
  <span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="mb-3">
 <button type="submit" class="btn btn-info">Search</submit>
</div>
</form>



 
</div>

</div>

@php 

$administrator = App\User::where('is_admin',1)->get();

@endphp


@php 

$superadministrator = App\User::where('is_admin',2)->get();

@endphp


<div class="mt-5">
<p class="font-weight-bold"> Administrators</p>
<ol class="list-group list-group-numbered  ">

@forelse ($administrator as $admin)
  <a href="{{route('user.edit',$admin->id)}}"> <li class="list-group-item bg-success text-white font-weight-bold"><i class="fas fa-user-tag"></i>   {{$admin->name}}</li></a>
@empty

No users found

@endforelse

</ol>
</div>

<div class="mt-5">
<p class="font-weight-bold">Super Admins</p>
<ol class="list-group list-group-numbered  ">

@forelse ($superadministrator as $superadmin)
  <a href="{{route('user.edit',$superadmin->id)}}"> <li class="list-group-item bg-warning text-white font-weight-bold"><i class="fas fa-user-shield"></i>   {{$superadmin->name}}</li></a>
@empty

No users found

@endforelse

</ol>
</div>



</div>
</div>













@endsection