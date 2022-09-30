<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>matrimony</title>
        <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('/css/font-awesome.min.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="{{url('/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="{{url('/js/jquery-2.1.1.min.js')}}"></script>
        <script src="{{url('/js/bootstrap.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    </head>
    <body>
    <section id="header" class="cd-secondary-nav">
          <nav class="navbar navbar-default" role="navigation">
         <div class="container">
           <div class="row">
              <div class="col-sm-12 space_all">
                @if(Auth::user())
                <p style="float: right;">Log-out:
                    <a href="{{route('signout')}}" class="btn btn-info btn-lg">
                      <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                  </p>
                  @endif
                    <a href="{{route('google')}}" class="btn bth-lg-primaty btn-block">
                       <strong>Login With Google</strong></a>
                  <div class="col-sm-4 space_all">
                   <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <div class="header_2">
                       <h2><a class="navbar-brand" href="index.html"><i class="fa fa-users"></i>Matrimonials</a></h2>
                    </div>
                 </div>
                  </div>
                  @if(session()->has('message_login'))
              <p class="alert {{ session('alert-success') }}">{{ session('message_login') }}</p>
                           @endif
                     @if(!Auth::user())
                  <div class="col-sm-8 space_all">
                      <div class="col-sm-12 space_all">
                        <form action="{{route('userlogin')}}" method="GET">
                       <div class="header_5 clearfix">
                      <div class="col-sm-5">
                        <div class="header_3">
                          <input type="email" name="email" class="form-control" placeholder="Matrimony ID / Mobile No. / E-mail">
                         </div>
                         @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                      </div>
                      <div class="col-sm-5">
                        <div class="header_3">
                          <input type="text" name="password" class="form-control" placeholder="Password">
                          @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                         </div>
                      </div>
                      <div class="col-sm-2">
                       <div class="header_4">
                       <button type="submit" class="btn-primary">Log In</button>
                       </div>
                      </div>
                     </div>
                     </form>
                     <div class="col-sm-12 space_all">
                      <div class="header_6">
                       <div class="col-sm-5 space_all">
                        <div class="col-sm-12 space_all">
                         <div class="col-sm-1 space_all">
                          <div class="header_7">
                           <p><a href="#"><input type="checkbox"></a></p>
                          </div>
                         </div>
                         <div class="col-sm-11 space_all">
                          <div class="header_7">
                         <a href="#"><span class="well_2">Keep me logged in</span></a>
                        </div>
                         </div>
                        </div>
                      </div>
                      <div class="col-sm-7">
                       <div class="header_8">
                        <ul>
                             <li><a href="#">Forgot password?</a></li>
                             <li class="well_3">|</li>
                             <li><a href="#">Login Via OTP</a></li>
                        </ul>
                       </div>
                      </div>
                      </div>
                     </div>
                     @endif
                    <div class="col-sm-12 space_all">
                              <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
                              <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html" class="hvr-wobble-to-top-right">HOME</a></li>
                                <li><a href="Listing.html" class="hvr-wobble-to-top-right">LISTING</a></li>
                                <li><a href="sarch form.html" class="hvr-wobble-to-top-right">SARCH FORM</a></li>
                                <li><a href="details.html" class="hvr-wobble-to-top-right">DETAILS</a></li>
                                <li><a href="contact.html" class="hvr-wobble-to-top-right">CONTACT</a></li>
                                <li class="dropdown">
                                <a href="#" class="hvr-wobble-to-top-right" data-toggle="dropdown">DROPDOWN <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                     <li><a href="Listing.html" class="hvr-wobble-to-top-right">LISTING</a></li>
                                     <li><a href="details.html" class="hvr-wobble-to-top-right">DETAILS</a></li>
                                     <li><a href="contact.html" class="hvr-wobble-to-top-right">CONTACT</a></li>
                                  </ul>
                                </li>
                              </ul>
                        </div>
                    </div>
                  </div>
               </div>
             </div>
            </div>
           </div>
          </nav>
         </section>
         <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>
