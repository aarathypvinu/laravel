@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
<div class="col col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
<center><h1>Furnitureland Welcomes you !!! <span class="badge bg-secondary"></span></h1></center>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://www.homesoulliving.com/wp-content/uploads/2017/11/bnr6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://www.homesoulliving.com/wp-content/uploads/2017/11/bnr1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://aonefurniture.in/assets/site/images/1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br><br><br>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
</div>
</div>

@endsection