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
    <label for="status">Produk:</label>
        <select name="status" id="status" required>
            <option value="" disabled selected> Pilih Status </option>
            <option value="Pesanan berhasil dipesan">Pesanan berhasil dipesan</option>
            <option value="Pesanan sedang dikemas">Pesanan sedang dikemas</option>
            <option value="Pesanan sedang dikirim">Pesanan sedang dikirim</option>
            <option value="Pesanan diterima">Pesanan diterima</option>
            <option value="Pesanan dibatalkan">Pesanan dibatalkan</option>
        </select>
    <button type="submit">Simpan</button>
</form>