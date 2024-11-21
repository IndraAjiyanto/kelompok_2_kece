<!-- app/views/produk/create.php -->
<h2>Tambah Produk Baru</h2>
<form action="/produk/store" method="POST">
<label for="kategori">Choose a fruit:</label>
    <select id="kategori" name="id_kategori">
        <?php foreach($kategori as $row){?>
        <option value="<?php echo $row['id_kategori']?>"><?php echo $row['nama_kategori']?></option>
        <?php
    };
    ?>
    </select>
    <label for="nama_produk">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" required>
    <label for="deskripsi">Deskripsi:</label>
    <input type="text" name="deskripsi" id="deskripsi" required>
    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" required>
    <label for="id_user">Id User:</label>
    <input type="number" name="id_user" id="id_user" required>
    <button type="submit">Simpan</button>
</form>
