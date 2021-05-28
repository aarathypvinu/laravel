@extends("theme1")
@section("content1")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/sofaeditprocess/{{ $sofas->id }}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>
<h2>Add Sofa</h2>
<br>
 <tr>
     <td>Model</td>
     <td><input value="{{ $sofas->Model }}" name="Model" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Description</td>
     <td><input value="{{ $sofas->Description }}" name="Description" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Material</td>
     <td><input value="{{ $sofas->Material }}" name="Material" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Dimension_inch</td>
     <td><input value="{{ $sofas->Dimension_inch }}" name="Dimension_inch" type="text" class="form-control">
</td>
<tr>
     <td>Price</td>
     <td><input value="{{ $sofas->Price }}" name="Price" type="text" class="form-control">
</td>

<tr>
     <td>Gallery</td>
     <td><input value="{{ $sofas->Gallery }}" name="Gallery" type="text" class="form-control">
</td>
 </tr>


 <tr>
     <td></td>
     <td><center><button class="btn btn-success"> UPLOAD </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection