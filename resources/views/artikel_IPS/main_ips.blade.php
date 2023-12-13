
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main ips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/artikel.css">
  </head>
  <body>
    {{-- navbar --}}
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
      {{-- end navbar --}}
      {{-- judul artikel --}}
      <div class="text-light">
<div class="m-3">
  <h2>Ekonomi</h2>
</div>
</div>
      {{-- end judul artikel --}}

      <div class="m-4">
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col"> 
          <div class="card" style="width: 18rem;">
              <img src="./image/biologi.jpg" class="card-img-top" alt="biologi">
              <div class="card-body">
                @foreach ($isi as $artikel)
              <article>
                <h5 class="card-title">{{ $artikel["judul"] }}</h5>
                <p class="card-text">{{ $artikel["body"] }}</p>
                <a href="ekonomi1" class="btn btn-primary">Go somewhere</a>
              </article>
                @endforeach
              </div>
            </div>
          </div>
       
            {{-- end card --}}

        {{-- card2 --}}
       
        <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="./image/ekonomi.jpg" class="card-img-top" alt="ekonomi">
              <div class="card-body">
                @foreach ($isi as $artikel)
                <article>
                  <h5 class="card-title">{{ $artikel["judul"] }}</h5>
                  <p class="card-text">{{ $artikel["body"] }}</p>
                  <a href="/ekonomi2" class="btn btn-primary">Go somewhere</a>
                </article>
                  @endforeach
              </div>
            </div>
          </div>
       
          {{-- end card2 --}}

          {{-- card3 --}}
          
        <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="./image/Fisika.jpg" class="card-img-top" alt="Fisika">
              <div class="card-body">
                @foreach ($isi as $artikel)
                <article>
                  <h5 class="card-title">{{ $artikel["judul"] }}</h5>
                  <p class="card-text">{{ $artikel["body"] }}</p>
                  <a href="/ekonomi3" class="btn btn-primary">Go somewhere</a>
                </article>
                  @endforeach
            </div>
          </div>
          {{-- end card3 --}}
        </div>
    </div>
  </div>
</div>
{{-- content end --}}
{{-- judul content 2 --}}
<div class="text-light">
  <div class="m-3">
    <h2>sosiologi</h2>
  </div>
  </div>
{{-- end judul content 2 --}}

{{-- content 2 --}}

      {{-- Content --}}

      <div class="m-4">
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

          {{-- card3 --}}
          
        <div class="col">
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
</div>
{{-- content end --}}
{{-- end content 2 --}}

{{-- content 3 --}}
{{-- judul content 3 --}}
<div class="text-light">
  <div class="m-3">
    <h2>Geografi</h2>
  </div>
  </div>
{{-- end judul content 3 --}}

      {{-- Content 3 --}}

      <div class="m-4">
    
    <div class="container text-center">
      <div class="row align-items-start">
{{-- card 1--}}

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
       
            {{-- end card 1--}}

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

          {{-- card3 --}}
          
        <div class="col">
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
</div>
{{-- content end --}}
{{-- end content 3 --}}

{{-- judul content 4 --}}
<div class="text-light">
  <div class="m-3">
    <h2>Sejarah</h2>
  </div>
  </div>
{{-- end judul content 4 --}}

{{-- content 4 --}}
div class="m-4">
    
    <div class="container text-center">
      <div class="row align-items-start">
{{-- card 1--}}

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
       
            {{-- end card 1--}}

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

          {{-- card3 --}}
          
        <div class="col">
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
</div>
{{-- content end --}}
{{-- end content 4 --}}


      {{-- end isi --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>