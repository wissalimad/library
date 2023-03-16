

@extends("master.layout")

@section("title","home")

@section("content")

<main>

  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">    
      <div class="carousel-item active">
        <img class="d-block w-100"  width="100%" height="100%" src="image/slider1.jpg" >
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>BOOK CLUB</h1>
            <p>Read what you want, when you want…!</p>
            <p><a class="btn btn-lg btn-warning" href="book">check our new book</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100"  width="100%" height="100%" src="image/slider2.jpg" >
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>BOOK CLUB</h1>
            <p>Read what you want, when you want…!</p>
            <p><a class="btn btn-lg btn-warning" href="book">check our new book</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100"  width="100%" height="100%" src="image/slider3.jpg" >
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>BOOK CLUB</h1>
            <p>Read what you want, when you want…!</p>
            <p><a class="btn btn-lg btn-warning" href="book">check our new book</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <h1>Our authors</h1>
      <div class="col-lg-4">
        <img src="image\author1.jpeg"  id="image1">
        <h2 class="fw-normal">Brigid Kemmerer</h2>
        <p>japanese author</p>
        <p><a class="btn btn-secondary" href="book">View Works &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="image\author2.jfif" id="image2">      
        <h2 class="fw-normal">Julia Quinn</h2>
        <p>french author</p>
        <p><a class="btn btn-secondary" href="book">View Works &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="image\author3.jfif"  id="image3">
        <h2 class="fw-normal"> dan brown</h2>
        <p>American author</p>
        <p><a class="btn btn-secondary" href="book">View Works &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->



  </div><!-- /.container -->
</main>
@endsection

