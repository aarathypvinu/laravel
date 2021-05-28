<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<div class="container">
<body>
    <div class="login">
    <div class="row" style ="margin-top:50px">
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<center><h1>Furnitureland <span class="badge bg-secondary"></span></h1></center>
<center><h4>Furnitureland <span class="badge bg-secondary"></span></h4></center>
<center><h5>Furnitureland <span class="badge bg-secondary"></span></h5></center>
<center><h6>Furnitureland <span class="badge bg-secondary"></span></h6></center>
<div class="card">
                <img height src="https://olivefurniture.in/wp-content/uploads/2019/06/Suitable-Furnitures.jpg" class="card-img-top" alt="...">
                
              </div>
    </div>
    <br> 
    <div class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
    <br><br><br><br>
    <h2><center>LOG IN</h1><br>
    <form action="{{ route('auth.check') }}" method="post">
    @if(Session::get('fail'))
    <div class="alert alert-danger">
    {{ Session::get('fail')}}
    </div>
    @endif
    @csrf
   
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder=" Enter your email" value="{{ old('email') }}">
    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
    </div>
    <br>
    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder=" Enter the password">
    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
    </div>
    <br>
    <br>
    <tr>
        <td>
        <center>
    <button  type="submit" class="btn btn-block btn-success">Sign in</button>
    </td>
    </tr>
    
    <br><br><center>
    <p class="izU2O ">Don't have an account? <a href="{{ route('auth.register') }}" tabindex="0"><span class="_7UhW9   xLCgt       qyrsm      gtFbE      se6yk        ">Sign up</span></a></p>
    <br>
    <p class="izU2O ">Sign in as <a href="/login" tabindex="0"><span class="_7UhW9   xLCgt       qyrsm      gtFbE      se6yy        ">Admin</span></a></p>
    </form>
    </div></div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body> 
</div>
</html>
