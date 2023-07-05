<?= $this->extend('layout/page_layout'); echo $this->section('content') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>

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
          <a class="nav-link" href="Genre/all">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TentangKami/all">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
    </nav>
        <div class="row">
          <div class="col-md-5">
            <h1>Semua Film</h1>
        </div>
        <div class="col-md-6 text-end">
          <a href="/film/add" class="btn btn-primary">Tambah Data</a>
        </div>

<div class="container">
    <div class="row">
        <div class="col-mod-12">
            <table class="table table-hover">
                <tr>
                    <th>No.</th>
                    <th>Nama Film</th>
                    <th>gambar</th>
                    <th>Genre</th>
                    <th>Duration</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($dataFilm as $film) : ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $film['nama_film']?></td>
                        <td style="width: 40px;"><img src="/assets/cover/<?= $film["cover"] ?>" class="card-img-top" alt="..."></td>
                        <td><?= $film['nama_genre']?></td>
                        <td><?= $film['duration']?></td>
                        </td>
                        <td>
                        <a href="/film/update/<?= ($film["id"]); ?>" class="btn btn-success">Update</a>
                        <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
<!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= $film['id'] ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
  
     <script>sr="/assets/js/bootstrap.min.js"></script>
</body>  

</html>
<?= $this->endSection() ?>