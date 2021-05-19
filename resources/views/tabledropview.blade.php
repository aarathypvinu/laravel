@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<img class="sofadetail-img" src="{{$tables['Gallery']}}" alt="">
</div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<a href="/home">Go Back</a>
       <h2><b>{{$tables['Model']}}</h2>
       <h3>Price : {{$tables['Price']}}</h3>
       <h4>Description: {{$tables['Description']}}</h4>
       <h4>Material: {{$tables['Material']}}</h4>
       <h4>Dimension(inch): {{$tables['Dimension_inch']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$tables['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       
       <br><br>
</div>
</div>
</div>

@endsection