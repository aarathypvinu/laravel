@extends("theme1")
@section("content1")


<div class="container">
<div class="row">


<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<br><br>
<h2><center>Tables and chairs</H2>
<br><br>
  <table class="table table-borderless">
  
     <tr>
         <th> MODEL </th>
         <th> DESCRIPTION </th>
         <th> MATERIAL </th>
         <th> DIMENSION_INCH</th>
         <th> PRICE </th>
         <th> GALLERY </th>
     </tr>


@foreach($Tables as $Table)
     <tr>
         <td> {{  $Table->Model }} </td>
         <td> {{  $Table->Description }} </td>
         <td> {{  $Table->Material }} </td>
         <td> {{  $Table->Dimension_inch }} </td>
         <td> {{  $Table->Price }} </td>
         <td> {{  $Table->Gallery }} </td>

<td> <a class="btn btn-warning" href="/Table/{{$Table->id}}/editTable">  Edit  </a> </td>

<td>  <a class="btn btn-danger" href="/Table/{{$Table->id}}/delete"  > Delete  </a>  </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>

</div>
</div>
@endsection