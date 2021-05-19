@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
      <div class="trending-wrapper">
        <h2><b>Popular among Customers</h2>
        <br>
        @foreach($sofas as $item)
        <div class="trending-item">
          <a href="sofadetail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['Gallery']}}">
          <div class="">
            <h3>{{$item['Model']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
       
      
      </div>
      </div>
</div>

</div>
</div>
</div>
@endsection