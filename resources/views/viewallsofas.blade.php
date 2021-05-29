@extends("theme1")
@section("content1")

<div class="container">
<div class="row">


<div class="col col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
<br><br>
<h2><center>Sofa</H2>
<br><br>
  <table class="table table-hover">
  
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