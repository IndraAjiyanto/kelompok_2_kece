<!-- app/views/kategori/create.php -->
<h2>Tambah Kategori</h2>
<form action="/kategori/store" method="POST">
    <label for="nama_kategori">Nama kategori:</label>
    <input type="text" name="nama_kategori" id="nama_kategori" required>
    <label for="deskripsi">Deskripsi:</label>
    <input type="deskripsi" name="deskripsi" id="deskripsi" required>
    <button type="submit">Simpan</button>
</form>
