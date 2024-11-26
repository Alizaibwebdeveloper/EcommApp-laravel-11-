<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      input {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 5px;
}

input:focus {
    outline: none;
    border-color: #007bff;
}

div.error{
    margin-bottom: 12px;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;

}

    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('/admin-panel/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{asset('/admin-panel/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
           
    <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('admin.login')}}" method="POST">
              @csrf
              <h1>Login Form</h1>
              <div>
                @error('email')
                <div class="error" style="color: white; background-color:red ">{{ $message }}</div>
                @enderror
                <input type="email" name="email" class="form-control" placeholder="Email" />
                
    
              </div>
              <div>
                @error('password')
                <div class="error" style="color: white; background-color:red ">{{ $message }}</div>
                    @enderror
                <input type="password" name="password" class="form-control" placeholder="Password"/>
             
              </div>
              <div>
                <button type="submit" class="btn btn-default">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{route('admin.register')}}" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> {{ config('app.name') }}</h1>
                  <p>©2024 All Rights Reserved. {{ config('app.name') }} developed By <span style="color: black; font-weight:bold;font-size:25px; font-family:math;">Ali zaib</span></p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
