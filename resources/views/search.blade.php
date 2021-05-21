@extends('theme')
@section("content")
<div class="custom-table">
     <div class="col-sm-4">
     <h1><b>Search Result</h1>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            
            @foreach($tables as $item)
            <div class="searched-item">
              <a href="tabledropview/{{$item['id']}}">
              <img class="trending-image" src="{{$item['Gallery']}}">
              <div class="">
                <h2>{{$item['Model']}}</h2>
                <h5>{{$item['Material']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
            @foreach($sofas as $item)
            <div class="searched-item">
              <a href="sofadropview/{{$item['id']}}">
              <img class="trending-image" src="{{$item['Gallery']}}">
              <div class="">
                <h2>{{$item['Model']}}</h2>
                <h5>{{$item['Material']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>

@endsection