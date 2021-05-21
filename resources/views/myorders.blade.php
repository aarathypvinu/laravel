@extends("theme")
@section("content")

<div class="custom-orders">
<div class="order-details">
<h1><b>My Orders </h1><br>
     <div class="col-sm-10">
       
            
            @foreach($sorders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="sofadetail/{{$item->id}}">
                
                    <img height="100px" width="200px" class="trending-image" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>Model : {{$item->Model}}</h3>
                      <h5>Order Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      

                    </div>
             </div>
            
            </div>
            @endforeach
            @foreach($torders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="tabledropview/{{$item->id}}">
                    <img height="100px" width="200px" class="trending-image" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>Model : {{$item->Model}}</h3>
                      <h5>Order Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      

                    </div>
             </div>
            
            </div>
            @endforeach
            
          </div>

     </div>
</div>
@endsection 