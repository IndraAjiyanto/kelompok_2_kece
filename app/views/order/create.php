<!-- app/views/user/create.php -->
<h2>Tambah Order Baru</h2>
<form action="/order/store" method="POST">
<label for="produk">Choose a fruit:</label>
    <select id="produk" name="id_produk">
        <?php foreach($produk as $row){?>
        <option value="<?php echo $row['id_produk']?>"><?php echo $row['nama_produk']?></option>
        <?php
    };
    ?>
    </select>
    <label for="user">Choose a fruit:</label>
    <select id="user" name="id_user">
        <?php foreach($user as $row){?>
        <option value="<?php echo $row['id_user']?>"><?php echo $row['nama']?></option>
        <?php
    };
    ?>
    </select>
    <label for="status">Status:</label>
    <input type="text" name="status" id="status" required>
    <button type="submit">Simpan</button>
</form>