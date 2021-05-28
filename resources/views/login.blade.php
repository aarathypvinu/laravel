<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
</head>
<body>
    <div class="login">
    <div class="row" style ="margin-top:170px">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    <br> 
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
    <h2><center>ADMIN LOG IN</h1><br>
    
    <form action="login" method="POST" >
    
    @csrf
   
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder=" Enter your email" >
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
    <button  type="submit" class="btn btn-block btn-success login-page">Sign in</button>
    </td>
    </tr>
    <br><br>
    <p class="izU2O ">Sign in as <a href="{{ route('auth.login') }}" tabindex="0"><span class="_7UhW9   xLCgt       qyrsm      gtFbE      se6yy        ">Customer</span></a></p>
   
    </form>
    </div></div>
    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body> 
</html>