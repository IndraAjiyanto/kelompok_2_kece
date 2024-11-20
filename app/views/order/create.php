<!-- app/views/user/create.php -->
<h2>Tambah Order Baru</h2>
<form action="/order/store" method="POST">
    <label for="id_produk">Id Produk:</label>
    <input type="number" name="id_produk" id="id_produk" required>
    <label for="id_user">Id User:</label>
    <input type="number" name="id_user" id="id_user" required>
    <label for="status">Status:</label>
    <input type="text" name="status" id="status" required>
    <button type="submit">Simpan</button>
</form>