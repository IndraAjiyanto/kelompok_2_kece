<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form action="/produk/update/<?php echo $produk['id_produk']; ?>" method="POST">
        <label for="id_kategori">Kategori:</label>
        <input type="number" id="id_kategori" name="id_kategori" value="<?php echo $produk['id_kategori']; ?>" required>
        <br>
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $produk['nama_produk']; ?>" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $produk['deskripsi']; ?>" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="<?php echo $produk['harga']; ?>" required>
        <br>
        <label for="id_user">Id user:</label>
        <input type="number" id="id_user" name="id_user" value="<?php echo $produk['id_user']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/produk/index">Back to List</a>
</body>
</html>