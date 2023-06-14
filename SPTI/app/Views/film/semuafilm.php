<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK99</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Branda</a>
        <a class="nav-link" href="#">Semua Film</a>
        <a class="nav-link" href="#">Kategori Folm</a>
        <a class="nav-link ">Tentang Kami</a>
      </div>
    </div>
  </div>
</nav>

    <div class="container">

    <div class="row">
        <?php foreach ($semuafilm as $film) : ?>
        <div class="col-md-4">
        <div class="card">
  <img src="/assets/cover/<?= $film ["cover"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $film ["nama_film"] ?></h5>
    <p class="card-text"><?= $film ["nama_genre"] ?> || <?= $film ["duration"] ?></p>
    <a href="#" class="btn btn-info">Detail </a>
    <a href="#" class="btn btn-success">Update</a>
    <a href="#" class="btn btn-warning">Delet</a>

  </div>
</div>

        </div>
        <?php endforeach; ?>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
