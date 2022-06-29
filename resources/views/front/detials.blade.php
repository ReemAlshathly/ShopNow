@include('front.include.header')

<main>
  <!-- products detials sections -->


  <section>
<div class="row "style="margin-right: 0px;padding-left: 5%;" >
  <div class="row bg-light">
<div class="col-md-6  bg-light mt-4 ">
  


<!--begin carousel-->
<div class="col-md-8 " style="margin-left: 10%;padding-left: 0px;padding-right: 0px;">
  <div class="row  mt-2">
<div id="myGallery" class="carousel slide  " data-interval="false">
  <div class="carousel-inner">
  <div class="item active col-12"> <img class="imgwidth" src="img/log.jpg" alt="item0">
  <div class="carousel-caption">
 
  </div>
  </div>
  <div class="item"> <img class="imgwidth" src="img/women/dresses/dress1.png" alt="item1">
  <div class="carousel-caption">
  
  </div>
  </div>
  <div class="item"> <img class="imgwidth" src="img/women/dresses/dress1.jpg" alt="item2">
  <div class="carousel-caption">
  
  </div>
  </div>
  <div class="item"> <img class="imgwidth" src="img/women/dresses/dress2.jpg" alt="item3">
  <div class="carousel-caption">
  
  </div>
  </div>
  <div class="item"> <img class="imgwidth" src="img/women/dresses/dress3.jpg" alt="item4">
  <div class="carousel-caption">
  
  </div>
  </div>
  <div class="item"> <img class="imgwidth" src="img/women/dresses/dress4.jpg" alt="item5">
  <div class="carousel-caption">
  
  </div>
  </div>
  <!--end carousel-inner--></div>
  <!--Begin Previous and Next buttons-->
  <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
  <!--end carousel--></div></div>
<ul class="list-inline ">
  <li data-toggle="modal" data-target="#myModal"><a href="#myGallery" data-slide-to="0"><img class="img-thumbnail " style="width:100%;height: 60px;" src="img/women/dresses/dress1.png"><br>
Caption</a></li>
  <li data-toggle="modal" data-target="#myModal"><a href="#myGallery" data-slide-to="1"><img class="img-thumbnail" style="width:100%;height: 60px;" src="img/women/dresses/dress2.jpg"><br>
Caption</a></li>
  <li data-toggle="modal" data-target="#myModal"><a href="#myGallery" data-slide-to="2"><img class="img-thumbnail"style="width:100%;height: 60px;" src="img/women/dresses/dress2.jpg"><br>
Caption</a></li>
  <li data-toggle="modal" data-target="#myModal"><a href="#myGallery" data-slide-to="3"><img class="img-thumbnail" style="width:100%;height: 60px;" src="img/women/dresses/dress3.jpg"><br>
Caption</a></li>
  <li data-toggle="modal" data-target="#myModal"><a href="#myGallery" data-slide-to="4"><img class="img-thumbnail" style="width:100%;height: 60px;" src="img/women/dresses/dress3.jpg"><br>
Caption</a></li>
  <li data-toggle="modal" data-target="#myModal"><a href="#myGallery" data-slide-to="5"><img class="img-thumbnail" style="width:100%;height: 60px;" src="img/women/dresses/dress2.jpg"><br>
Caption</a></li>
<!--end of thumbnails-->
</ul>
<!--begin modal window-->

</div>

</div>
<div class="col-md-4 bg-light mt-4 pt-4 pe-4" >
<div class="row">
  <h3 class=" col-10 text-lg-start fw-bolder mt-4 pt-4" style="color: rgb(71, 16, 16);">MEN'S SHOES FASHION</h3>
  
  </div>
  <div class="product-rating">

        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-warning"></i>
   
</div>
<h6>41 reviews</h6>
<p class=" mt-4">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et!
   Massa senectus enim minim sociosqu delectus posuere.</p>
   <h4 class="text-lg-start fw-bolder mt-4">CURRENT PRICE:<span class=" text-warning fw-bolder"> $180</span></h4>
   <p> <strong>91%</strong> of buyers enjoyed this product!</p> 
   <h5 class="text-lg-start fw-bolder mt-4">SIZES:<span class="  fw-bolder me-4 ms-4" style="color:rgb(71, 16, 16);"> XL</span>
    <span class="  fw-bolder me-4" style="color:rgb(71, 16, 16);"> L</span>
    <span class="  fw-bolder me-4" style="color:rgb(71, 16, 16);"> M</span>
    <span class="  fw-bolder me-4" style="color:rgb(71, 16, 16);">S</span></h5>
   <h5 class="text-lg-start fw-bolder mt-4">COLOR:<i class="fa fa-circle text-warning me-4 ms-4" aria-hidden="true"></i>
    <i class="fa fa-circle  me-4  fw-bolder"  style="color:palevioletred" aria-hidden="true"></i>
    <i class="fa fa-circle text-dark me-4  fw-bolder" aria-hidden="true"></i>
    <i class="fa fa-circle text-primary me-4  fw-bolder" aria-hidden="true"></i>
    <i class="fa fa-circle  me-4  fw-bolder" style="color:red" aria-hidden="true"></i>
  
  
  </h5>
  
    <button class="btn btn-outline col-3 pe-1 ps-1 pt-4 pb-4" style="border:solid rgb(71, 16, 16) 3px; color:rgb(240, 231, 231);font-size: 5%;"> BUY NOW</button>
    <button class=" col-2 bg-light"   style=" border: 0px;font-size:2vw ;padding: 0px;">
      <i class="fa fa-heart mt-4" style="font-size:1.5vw;color:rgb(71, 16, 16) ;margin-top: 5%;"></i></button>
 

</div>
</div>
</div>
  </section>
 <!--end products detials sections -->

</main>
@include('front.include.footer')