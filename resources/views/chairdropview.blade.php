@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="tabledetail-img" src="{{$chairs['Gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/home">Go Back</a>
       <h2><b>{{$chairs['Model']}}</h2>
       <h3>Price : {{$chairs['Price']}}</h3>
       <h4>Description: {{$chairs['Description']}}</h4>
       <h4>Material: {{$chairs['Material']}}</h4>
       <h4>Dimension(inch): {{$chairs['Dimension_inch']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$chairs['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       
       <br><br>
</div>
</div>
</div>

@endsection