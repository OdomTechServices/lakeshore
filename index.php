<?php
define('root','');
include(root.'includes/config.php');
include(root.'templates/header.php');
// Logo - Social/Connect Bar
include(root.'templates/socialbar.php');
// Navbar
include(root.'templates/navbar.php');
?>
<!-- slideshow banner full width -->
<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
         </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 img-fluid" src="<?=root?>assets/images/lodge.jpg"  alt="First slide">
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100 img-fluid" src="<?=root?>assets/images/boatdock.jpg"  alt="First slide">
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100 img-fluid" src="<?=root?>assets/images/RV.jpg"  alt="First slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<!-- Call To Action -->
<div class="container">
    <div class="row">
    <div class="col">

    </div>
    <div class="col-md-8 col-sm-12">
      <a href="<?=root?>reservations" class="btn btn-lg btn-block mx-auto mt-2 btn-success" name="button">Make A Reservation</a>
    </div>
    <div class="col">

    </div>
  </div>

</div>
<hr>
<!-- below the fold info -->
<div class="container mx-auto">
    <div class="d-flex justify-content-center">
        <h3 class="title">Escape To Beautify Lakeshore Lodge & RV At Possum Kingdom Lake!</h3>
    </div>
    <div class="row">
        <div class="col">
            <div class="textbox">
                <p>Lakeshore Lodge Cabins & RV Park is located on a rounded point with deep water on three sides. Each lake cabin is within walking distance of the shoreline and provides spectacular views of Possum Kingdom Lake.</p>
                <p>Make your trip to beautiful Possum Kingdom Lake a memorable one by joining us at Lakeshore Lodge Cabins & RV Park. Whether you're planning a weekend family outing, business meeting, or family reunion, we have the cabins and meeting facilities for you.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <img src="<?=root?>assets/images/boatdock2.jpg" class="img-fluid" alt="">
            <p>No more driving across the lake to launch your boat! <u><i>Free during your stay here at Lakeshore!</i></u></p>
            <p><u><i>Also availiable to non-guest for a only $15.00 per day.</i></u></p>
        </div>

    </div>
</div>
<br>
<!-- Meet our staff -->
<div class="container">
    <div class="d-flex justify-content-center">
        <h3 class="title">Meet Our Staff</h3><br>

    </div>
    <div class="d-flex justify-content-center">
        <h4 class="">Manager: Carrie Hawkins</h4>
    </div>
    <div class="d-flex justify-content-center">
        <h4 class="">Field Maintenance: Bert Cook</h4>
    </div>

</div>
<!-- footer -->
<?php
include(root.'templates/footer.php');
?>
