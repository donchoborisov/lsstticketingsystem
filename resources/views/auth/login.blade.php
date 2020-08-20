@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="username" class="col-md-4 col-form-label text-md-right"><i class="fas fa-user"></i></label>
                             
                            <div class=" col-md-6 ">
       
                            <input type="text" class="form-control login" name="username" placeholder="   ID number or Username..."  required >


                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock"></i></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control login" placeholder="   Password..."   name="password" required autocomplete="current-password">

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" >
                              <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>

                             
                            </div>

                           
                        </div>
                        </div>
                    </form>
                </div>
            </div>
         
                        
                            
        </div>
    </div>
    <div class="row justify-content-center mt-3">
                          
        <img class="logo" src="{{asset('/img/logo.jpg')}}">
                     
       </div>    
</div>
@endsection
<script>
if ( $(window).width() < 780 ){
    $('#password').tooltip('destroy');
}
</script>