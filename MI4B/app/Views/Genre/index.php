<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand bg-#DDA0DD" style="background-color: #DDA0DD;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK69</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Genre/all">Genre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
    </nav>
<body>
    <h1>Data Genre </h1>
    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Genre</th>
            <th>Action</th>
        </tr>
        <?php $i= 1; ?>
        <?php foreach ($data_genre as $semuagenre) : ?>
            <tr>
                <td><?= $i++;?></td>
                <td><?php echo $semuagenre['nama_genre'] ?></td>
                 <td>
                    <a href="" class="btn btn-success">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>    
            </tr>

    <?php endforeach?>

 </table>
</body>
</html>
