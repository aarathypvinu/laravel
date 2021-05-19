<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="container">
    <div class="register">
    <div class="row" style ="margin-top:70px">
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <br><br><br>
    <div class="card">
                <img height src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoW5aHb8-r3EUrqNvPMXjKGacvwWMxSYPCMw&usqp=CAU" class="card-img-top" alt="...">
              </div>
    </div>
    <br> <br>
    <div class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
     <br>
    <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
    <h2><center>REGISTER</h2>
    <form action="{{ route('auth.save') }}" method="post">
    @if(Session::get('Success'))
    <div class="alert alert-success">
    {{ Session::get('Success')}}
    </div>
    @endif
    @if(Session::get('Fail'))
    <div class="alert alert-danger">
    {{ Session::get('Fail')}}
    </div>
    @endif
    @csrf
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder=" Enter the username" value="{{ old('username') }}">
    <span class="text-danger">@error('username') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder=" Enter your name" value="{{ old('username') }}">
    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder=" Enter your email" value="{{ old('email') }}">
    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder=" Enter your mobile no" value="{{ old('mobile') }}">
    <span class="text-danger">@error('mobile') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder=" Enter your address" value="{{ old('address') }}">
    <span class="text-danger">@error('address') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder=" Enter the password">
    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
    </div>
    <br>
    <tr>
        <td>
        <center>
        <button type="submit" class="btn btn-block btn-primary">Create account</button>
    </td>
    </tr>
    <br><center>
    
    <br>

    <p class="izU2O ">I already have an account, <a href="{{ route('auth.login') }}" tabindex="0"><span class="_7UhW9   xLCgt       qyrsm      gtFbE      se6yk        ">Sign in</span></a></p>
    </form>
    </div></div>
    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<style>
.register-page{
    width: 491px
}
</style>
</div>
</body> 
</html>