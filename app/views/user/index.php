<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- app/views/user/index.php -->
    <div class="container mt-5">
<h2 class="mb-4">Daftar User</h2>
<a href="/user/create" class="btn btn-primary mb-3 fw-bold">Tambah User Baru</a>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><center>Nama</center></th>
                <th><center>Email</center></th>
                <th><center>Password</center></th>
                <th><center>Alamat</center></th>
                <th><center>Aksi</center></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['nama']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['password']) ?></td>
                    <td><?= htmlspecialchars($user['alamat']) ?></td>
                    <td>
                        <a href="/user/edit/<?php echo $user['id_user']; ?>" class="btn btn-warning btn-sm fw-bold">Edit</a>
                        <a href="/user/delete/<?php echo $user['id_user']; ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
