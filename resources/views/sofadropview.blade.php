@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img  height="400px" width="500px" class="tabledetail-img" src="{{$sofas['Gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/home">Go Back</a>
       <h2><b>{{$sofas['Model']}}</h2>
       <h3>Price : {{$sofas['Price']}}</h3>
       <h4>Description: {{$sofas['Description']}}</h4>
       <h4>Material: {{$sofas['Material']}}</h4>
       <h4>Dimension(inch): {{$sofas['Dimension_inch']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$sofas['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       
       <br><br>
</div>
</div>
</div>

@endsection