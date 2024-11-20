<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>

    <!-- Formulir untuk update produk -->
    <form action="/produk/update/<?php echo $produk['id_produk']; ?>" method="POST">
        
        <!-- Pilih Kategori -->
        <label for="kategori">Pilih Kategori:</label>
        <select id="kategori" name="id_kategori" required>
            <?php foreach ($kategori as $row) { ?>
                <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']?></option>
            <?php }; ?>
        </select>
        <br>

        <!-- Input Nama Produk -->
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" 
               value="<?php echo htmlspecialchars($produk['nama_produk']); ?>" required>
        <br>

        <!-- Input Deskripsi -->
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" 
               value="<?php echo htmlspecialchars($produk['deskripsi']); ?>" required>
        <br>

        <!-- Input Harga -->
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" 
               value="<?php echo $produk['harga']; ?>" required>
        <br>

        <!-- Input ID User -->
        <label for="id_user">ID User:</label>
        <input type="number" id="id_user" name="id_user" 
               value="<?php echo $produk['id_user']; ?>" required>
        <br>

        <!-- Tombol Submit -->
        <button type="submit">Update</button>
    </form>

    <!-- Tombol Kembali -->
    <a href="/produk/index">Back to List</a>
</body>
</html>
