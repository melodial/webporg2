<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biologi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/artikel.css">
  </head>
  <body>
    
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
    <div class="text-light">
      
      
      <div class="m-4">
      <div class="container">
        <h1> <?php echo e($judul); ?></h1>

      </div>
    </div>
      
      
      <div class="m-4">
      <div class="container">
        <p><?php echo e($isi); ?></p>
      </div>
    </div>
  </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\maprojek\resources\views///artikel_Mipa/biologi/biologi1.blade.php ENDPATH**/ ?>