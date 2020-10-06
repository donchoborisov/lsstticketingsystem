@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (session('delete'))
                        <div class="alert alert-danger text-center"><i class="fas fa-exclamation-circle"></i>
                            {{ session('delete') }}
                        </div>
                    @endif
            <div class="card faq">
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
                          
        <img class="img-fluid" style="border-radius:40px; width:300px; height:100px;" src="{{asset('/img/logo.jpg')}}">
                     
       </div>    
</div>
<p class="text-center" style="color:red;"><b>Frequently Asked Questions</b></p>
<p class="text-center" style="color:red;"><small><i>(Click on the links below)</i></small></p>
<div class="row justify-content-center mt-3">


<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         How to join online classes <i class="fa fa-question-circle-o" aria-hidden="true"></i>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       Open your browser (Mozzila Firefox recommended) and open or click this link <a href="https://online.lsst.ac/login/">https://online.lsst.ac/login/</a>
        and you will see this screen below:<br><br>

        <div style=" box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/1.gif')}}">
       </div><br>
       Click the button <b>SIGN IN WITH OFFICE365</b> and then you will see the screen below:
       <div style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/2.gif')}}">
       </div><br>
       
       
       
       
         Type your LSST college email address  which is your LSST ID number <b>Hxxxxxxx@lsst.ac</b> and after you click <b>Next</b> you will see the next screen below:
        <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/3.gif')}}">
       </div><br>

        
        
        
        and then type your password  which is your date of birth back to front format <b>YYYYMMDD</b>  after that you will see the next screen below:
        <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/4.gif')}}">
       </div><br>
       Click <b>Yes</b> and finally you will be able to see the screen with your classes for the day
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/5.gif')}}">
       </div><br>
       Navigate and click on the <b>Dashboard</b> section then click on <b>Join Class</b> button. 
       And then text with red color <b>"Please click here to view your class online"</b> will pop-up below 
       the classes table shown on the picture below:
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/6.gif')}}">
       </div><br>

       After you click the red text <b>"Please click here to view your class online"</b> you will see the screen shown below:
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/7.gif')}}">
       </div><br>
       Type you <b>First Name</b>,<b>Last Name</b> and your <b>College Email address</b> which is your LSST ID number <b>hxxxxxxx@lsst.ac</b> 
       and then click the button <b>Register</b> and then you will see Reegistration Confirmation screen shown on the next picture below:
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/8.gif')}}">
       </div><br>
       And then click the <b>join the webinar</b> link and you will se the next screen shown on the picture below:
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/9.gif')}}">
       </div><br>

       Pop-up window will come-up asking you to save the file. Save and then click on the file to run the file. 
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/10.gif')}}">
       </div><br> 
       After you click the file  you need to wait the loading pop-up window to finish:
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/11.gif')}}">
       </div><br> 
       And the final step is to click on the icon <b>Computer Auido</b> shown on the picture below:
       <div class="faq">
       <img class="rounded mx-auto d-block"  src="{{asset('/class/12.gif')}}">
       </div><br>
        
       and you will be able to see the shared Webinar screen from your lecturer. 





      </div>
    </div>
  </div>
  <!-- <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Step #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> -->
  <!-- <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Step #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> -->
</div> 
                          
                            
</div>
@endsection
<script>
if ( $(window).width() < 780 ){
    $('#password').tooltip('destroy');
}
</script>