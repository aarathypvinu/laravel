@extends("theme1")
@section("content1")


<div class="container">
<div class="row">


<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<br><br>
<h2><center>Sofa</H2>
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


@foreach($sofas as $sofa)
     <tr>
         <td> {{  $sofa->Model }} </td>
         <td> {{  $sofa->Description }} </td>
         <td> {{  $sofa->Material }} </td>
         <td> {{  $sofa->Dimension_inch }} </td>
         <td> {{  $sofa->Price }} </td>
         <td> {{  $sofa->Gallery }} </td>

<td> <a class="btn btn-warning" href="/sofa/{{$sofa->id}}/editsofa">  Edit  </a> </td>

<td>  <a class="btn btn-danger" href="/sofa/{{$sofa->id}}/delete"  > Delete  </a>  </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>

</div>
</div>
@endsection