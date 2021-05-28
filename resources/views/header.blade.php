<?php 
use App\Http\Controllers\SofaController;
$total=0;
if(Session::has('LoggedUser'))
{
  $total= SofaController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Furnitureland</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
            <li><a class="dropdown-item" href="/sofa">Sofa</a></li>
            <li><a class="dropdown-item" href="/table">Tables and chairs</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactus">Contact Us</a>
        </li>
        <form action="/search" && "searchproduct" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-outline-success">Search</button>
        </form>
        </ul>
        <ul class="navbar-nav  mb-2 mb-lg-xl-xxl-0 navbar-right">
        <li><a class="dropdown-item" href="/cartlist">Cart({{$total}})</a></li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/admin/youraccount">Your Account</a></li>
            <li><a class="dropdown-item" href="/myorders">Orders</a></li>
            
            <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Sign out</a></li>
          </ul>
        </li>
        </ul>
    </div>
  </div>
</nav>