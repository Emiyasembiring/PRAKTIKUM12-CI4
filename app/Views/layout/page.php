<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Protal Berita Codeigniter</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>

<script src="/assets/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 12</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film/">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/genre/all">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    
    <?= $this->renderSection('content') ?>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Emiya sembiring</div>
	</footer>

</body>

</html>