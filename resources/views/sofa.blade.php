@extends("theme")
@section("content")
<div class="container">
<div class="trending-wrapper">
        <h1><b>Sofas</h1>
        <br>
        @foreach($sofas as $item)
        <div class="trending-item">
        <div class="">
            <h3>{{$item['Model']}}</h3>
          </div>
          <a href="sofadropview/{{$item['id']}}">
          <img class="trending-image" src="{{$item['Gallery']}}">
          
        </a>
        </div>
        @endforeach
      </div>
     
      </div>
      @endsection