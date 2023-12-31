<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/homePage.css">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="/aboutus">GetToKnow</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/homepage">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/welcomePage">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
{{-- Navbar end --}}

{{-- carousel --}}
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="./image/walpaper1.jpg" class="d-md--block w-100 c-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
        <div class="carousel-item c-item">
          <img src="./image/walpaper3.jpg" class="d-md--block w-100 c-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="./image/walpaper2.jpg" class="d-md--block w-100 c-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
{{-- end carousel --}}
<br>
<br>
<br>
<br>

{{-- Content --}}

    <div class="container text-center">
        <div class="row align-items-start">
{{-- card --}}
          <div class="col"> 
            <div class="card" style="width: 18rem;">
                <img src="./image/biologi.jpg" class="card-img-top" alt="biologi">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur laborum fugit ducimus ut suscipit nobis et unde deserunt eligendi?</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
              {{-- end card --}}

          {{-- card2 --}}
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="./image/ekonomi.jpg" class="card-img-top" alt="ekonomi">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque facilis placeat nihil porro expedita quas soluta provident, asperiores architecto assumenda?</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            {{-- end card2 --}}
          
          <div class="col">
            {{-- card3 --}}
            <div class="card" style="width: 18rem;">
                <img src="./image/Fisika.jpg" class="card-img-top" alt="Fisika">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum fugit suscipit laudantium porro eius cum sed possimus consequuntur nam! Rem!</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            {{-- end card3 --}}
          </div>
      </div>
    </div>
{{-- content end --}}

{{-- alert --}}
<div class="m-4">
  <div class="text-center">
    <div class="text-light">
  <p class="lead">
    Jelajahi dan Perluas Pengetahuanmu!
  </p>
</div>
</div>
</div>
{{-- end alert --}}
{{-- button --}}
<div class="text-center">
<div class="m-4">
  <div class="">
<button type="button" class="btn btn-secondary btn-lg">
    <a href="aboutus" style="text-decoration: none">Ayo!</a>
</button>
</div>
</div>
{{-- end button --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>