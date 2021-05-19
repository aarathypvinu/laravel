@extends("theme")
@section("content")
<div class="container">
    <div class=" row  cart-list-deviderr"> 
    <div class="col-sm-10">
        <div class="trending-wrapperr">
            <h1><b>Cart Products</h1>
            
            <a class="btn btn-success button" href="ordernow">Order Now</a>
            <a href="/home">Go Back</a> <br> <br>
            @foreach($sofas as $item)
            <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <a href="sofadetail/{{$item->id}}">
                    <img height="100px" width="200px" class="trending-imagee" src="{{$item->Gallery}}">
                  </a>
             </div>
             <br>
             
             
             <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="product-details">
                      <h2>{{$item->Model}}</h2>
                      <h5>{{$item->Material}}</h5>
                      <h5>{{$item->Dimension_inch}}</h5>
                      <h5>Price : {{$item->Price}}</h5>
                    <br>
                    </div>
             
             </div>
             <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
             <div class="remove">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
                <br>
             </div>
             </div>
            </div>
            </div>
            @endforeach
            @foreach($tables as $item)
            <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <a href="tabledropview/{{$item->id}}">
                    <img  class="trending-imagee" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="product-details">
                      <h2>{{$item->Model}}</h2>
                      <h5>{{$item->Material}}</h5>
                      <h5>{{$item->Dimension_inch}}</h5>
                      <h5>Price : {{$item->Price}}</h5>
                    <br>
                    </div>
             </div>
             <div class="colcol-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
             <div class="remove">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
                <br>
             </div>
            </div>
            </div>
            </div>
            @endforeach
           
          </div>
          <a class="btn btn-success sobutton" href="ordernow">Order Now</a> <br> <br>

     </div>
     
</div>

@endsection 


