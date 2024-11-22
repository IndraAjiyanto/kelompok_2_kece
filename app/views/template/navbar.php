<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVC</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <p class="navbar-brand fw-bold">MVC</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link <?php echo ($judul == "user") ? "active" : ""; ?>" href="/user/index">User</a>
=======
          <a class="nav-link <?php echo ($judul == "user") ? "active" : ""; ?>" href="/user/index">User</a>
>>>>>>> main
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($judul == "kategori") ? "active" : ""; ?>" href="/kategori/index">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($judul == "produk") ? "active" : ""; ?>" href="/produk/index">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($judul == "order") ? "active" : ""; ?>" href="/order/index">Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

