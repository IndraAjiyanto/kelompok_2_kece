<!-- app/views/user/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4"><center>Tambah User</center></h2>
        <form action="/user/store" method="POST" class="border p-4 rounded shadow-sm bg-light">
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
            <a href="/user/index" class="btn btn-secondary fw-bold">Batal</a>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

