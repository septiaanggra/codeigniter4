<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LK69</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand bg-#E966A0" style="background-color: #E966A0;">
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
          <a class="nav-link"href="TentangKami/all"> Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <?= $this->renderSection('content') ?>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Septia Anggraini</div>
	</footer>

<script src="assets/js/bootstrap.min.js"></script>
<?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>
</body>

</html>