@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                @if(Auth::user()->is_admin)
                <div class="card-header"><b>Admin Panel</b></div>
                @else
                <div class="card-header"><b>Dashboard</b></div>
                @endif

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif



                @if(Auth::user()->is_admin)
                 
                <div class="row">
  <div class="col-3">
    <div class="list-group" id="myTab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list"  href="{{url('admin/tickets')}}" data-toggle="tooltip" data-placement="right"  title="Click to view all tickets" role="tab" aria-controls="home"><i class="fa fa-ticket" aria-hidden="true"></i> All Tickets</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-profile"  role="tab" aria-controls="profile"><i class="fa fa-building-o" aria-hidden="true"></i> By Campus</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-messages"   role="tab" aria-controls="messages"><i class="fa fa-plus-square" aria-hidden="true"></i> Campus</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-settings"   role="tab" aria-controls="settings"><i class="fa fa-plus-square" aria-hidden="true"></i> Category</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <form class="form-inline mt-2" method="GET" action="{{url('/admin/campus/tickets')}}">@csrf
@php
 $campuses = DB::table('campuses')->get();
@endphp


<div class="form-group mx-sm-3 mb-2 {{ $errors->has('Campus') ? ' has-error' : '' }}">
  <label for="campus" class="sr-only">Campus</label>
 
    <select class="custom-select mr-sm-2" name="Campus">
       <option value="">Choose Campus</option>
         @foreach($campuses as $campus)
        <option value="{{$campus->id}}">{{$campus->name}}</option>
        @endforeach

    </select>
  
</div>


<button type="submit" class="btn btn-outline-secondary  btn-sm mb-2">View Tickets</button>
</form>
<div class="error">
     @if ($errors->has('Campus'))
    <span class="error" style="color:#FF0000;">
    <small><strong>{{ $errors->first('Campus') }}</strong></small>
    </span>
    @endif
</div>


      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <form class="form-inline mt-2" method="post" action="{{url('/admin/new-campus')}}">@csrf

<div class="form-group mx-sm-3 mb-2 {{ $errors->has('campus') ? ' has-error' : '' }}">
  <label for="campus" class="sr-only">Campus</label>
 
  <input type="text" name="campus" class="form-control shadow-none" id="campus" placeholder="Campus Name" >
                            

                         
                      
</div>
<button type="submit" class="btn btn-outline-secondary  btn-sm mb-2">Add Campus</button> 
                               
                            

</form>
<div class="error">
     @if ($errors->has('campus'))
    <span class="error" style="color:#FF0000;">
    <small><strong>{{ $errors->first('campus') }}</strong></small>
    </span>
    @endif
</div>
<br>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Campus</th>
      <th scope="col"></th>
   
    </tr>
  </thead>
  <tbody>
      @foreach($campuses as $key=>$row)
    <tr>
  
      <td>{{$key +1}}</td>
      <td>{{$row->name}}</td>
      <td><a href="{{ url('/admin/delete/campus/'. $row->id)}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
           <button id="{{$row->id}}"class="btn btn-sm btn-outline-info mr-3" onclick="campusedit(this.id)" data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-pencil-square-o"   ></i></button>
      </td>
    </tr>
       @endforeach
 
  </tbody>
</table>



      </div>

      @php
 $category = DB::table('categories')->Simplepaginate(5);
@endphp

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <form class="form-inline mt-2" method="post" action="{{url('/admin/new-category')}}">@csrf

<div class="form-group mx-sm-3 mb-2 {{ $errors->has('category') ? ' has-error' : '' }}">
  <label for="category" class="sr-only">Category</label>
  <input type="text" name="category" class="form-control" id="category" placeholder="Category Name">

                            
</div>
<button type="submit" class="btn btn-outline-secondary  btn-sm mb-2">Add Category</button>
</form>
<div class="error">
@if ($errors->has('category'))
<span class="error" style="color:#FF0000;">
<small><strong>{{ $errors->first('category') }}</strong></small>
</span>
 @endif

 <br>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col"></th>
   
    </tr>
  </thead>
  <tbody>
      @foreach($category as $key=>$row)
    <tr>
  
      <td></td>
      <td>{{$row->name}}</td>
      <td><a href="{{ url('/admin/delete/category/'. $row->id)}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
           
          <button  id="{{$row->id}}" class="btn btn-sm btn-outline-info mr-3" data-toggle="modal" data-target="#exampleModal" aria-hidden="true" onclick="categoryedit(this.id)"><i class="fa fa-pencil-square-o" ></i></button>
          
      
      </td>
    </tr>
       @endforeach
 
       {{$category->render()}}
  </tbody>
</table>


</div>


      </div>
    </div>
  </div>
</div>



<!-- Modal category-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('update.category')}}" method="POST">@csrf
      <div class="{{ $errors->has('cname') ? ' has-error' : '' }}">
      <input type="text" id="cname" name="cname" value="" >
      <input type="hidden" name="cid" id="cid" value="">
      </div>
      <div class="error">
     @if ($errors->has('cname'))
    <span class="error" style="color:#FF0000;">
    <small><strong>{{ $errors->first('cname') }}</strong></small>
    </span>
    @endif
    @if ($errors->has('cname'))
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#exampleModal').modal('show');
        });
    </script>
  @endif

</div>
       
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-outline-primary btn-sm">Save changes</button>
        </form>
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit campus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('update.campus')}}" method="POST">@csrf
      <div class="{{ $errors->has('kname') ? ' has-error' : '' }}">

        <input type="text" id="kname" name="kname" value="">
        <input type="hidden" id="kid" name="kid" value="">
      </div>
      @if ($errors->has('kname'))
    <span class="error" style="color:#FF0000;">
    <small><strong>{{ $errors->first('kname') }}</strong></small>
    </span>
    @endif
    @if ($errors->has('kname'))
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#exampleModal2').modal('show');
        });
    </script>
  @endif
      </div>
      <div class="modal-footer">
       
        <button type="submit" class="btn btn-outline-primary btn-sm">Save changes</button>
        </form>
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







<script type="text/javascript">
    function categoryedit(id){
        $.ajax({
         url: "{{ url('/admin/edit/category/') }}/"+id, 
         type: "GET",
         dataType:"json",
         success:function(data){
       $('#cid').val(data.id);
       $('#cname').val(data.name);
     }  
        })
    }

    function campusedit(id){
      $.ajax({
        url:"{{url('/admin/edit/campus/')}}/"+id,
        type:"GET",
        dataType:"json",
        success:function(data){
          $('#kname').val(data.name);
          $('#kid').val(data.id);
        }
      })
}




</script>
 









                @else
                <p>You are logged in to the LSST Ticketing System</p>

                <div class="d-flex justify-content-around mb-3">
                <a class="btn btn-secondary" href="{{url('my_tickets')}}" role="button">View your Tickets</a> 
                <a class="btn btn-danger btn-outline" href="{{url('new-ticket')}}" role="button">Create New Ticket</a>
               </div>

             
                 
                @endif
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

