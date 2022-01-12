<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/login') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ url('public/login') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public/login') }}/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ url('public/login') }}/css/style.css">

    <title>Login To Admin Simple House</title>
  </head>
  <body>
  

  
    <div class="content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5">
            <span class="d-block text-center my-4 text-muted"> or sign in with</span>
            <div class="social-login text-center">
              <a href="#" class="facebook btn btn-block">
                <span class="icon-facebook mr-3"></span> 
              </a>
              <a href="#" class="twitter btn btn-block">
                <span class="icon-twitter mr-3"></span> 
              </a>
              <a href="#" class="google btn btn-block">
                <span class="icon-google mr-3"></span> 
              </a>
            </div>

          </div>
          <div class="col-md-2 text-center">
            &mdash; or &mdash;
          </div>
          <div class="col-md-5 contents">
            <div class="form-block">
            <div class="mb-4">
                  <h3>Sign In to <strong>Simple House</strong></h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                </div>
                
                
                <form action="{{ url('dashboard') }}" get="post">
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"> 

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"> 
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                  
                  
                  
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

  
    <script src="{{ url('public/login') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/login') }}/js/popper.min.js"></script>
    <script src="{{ url('public/login') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('public/login') }}/js/main.js"></script>
  </body>
</html>