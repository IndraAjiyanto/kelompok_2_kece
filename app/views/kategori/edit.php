<!-- app/views/kategori/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
</head>
<body>
    <h2>Edit Kategori</h2>
    <form action="/kategori/update/<?php echo $kategori['id_kategori']; ?>" method="POST">
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori" value="<?php echo $kategori['nama_kategori']; ?>" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <input type="deskripsi" id="deskripsi" name="deskripsi" value="<?php echo $kategori['deskripsi']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/kategori/index">Back to List</a>
</body>
</html>