@extends("theme")
@section("content")
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
    <br><br><br>
    <h3>My Account</h3>
    </div></div></div>
    <div class="container">
    <div class="row">
    
    <div class="col col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
    
    <br><br><br>
    <table class="table table-hover">
    <thead>
    <th>username</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    </thead>
    <tbody>
    <tr>
        <td>{{ $LoggedUserInfo['username'] }}</td>
        <td>{{ $LoggedUserInfo['name'] }}</td>
        <td>{{ $LoggedUserInfo['email'] }}</td>
        <td>{{ $LoggedUserInfo['mobile'] }}</td>
        <td>{{ $LoggedUserInfo['address'] }}</td>
        <td><a class="btn btn-info" href="#">Edit</a></td>
    
       
    </tr>
    </tbody>
    </table>
    <table class="account-table"></table>
    </div>
    </div>
    </div>
    @endsection