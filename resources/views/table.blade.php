@extends("theme")
@section("content")
<div class="container">
<div class="trending-wrapper">
        <h1><b>Tables</h1>
        <br><br>
        @foreach($tables as $item)
        <div class="trending-item">
        <div class="">
            <h3>{{$item['Model']}}</h3>
          </div>
          <a href="tabledropview/{{$item['id']}}">
          <img class="trending-image" src="{{$item['Gallery']}}">
          
        </a>
        </div>
        @endforeach
      </div>
     
      </div>
      @endsection