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
    <label for="user">Choose a fruit:</label>
    <select id="user" name="id_user">
        <?php foreach($user as $row){?>
        <option value="<?php echo $row['id_user']?>"><?php echo $row['nama']?></option>
        <?php
    };
    ?>
    </select>
    <button type="submit">Simpan</button>
</form>
