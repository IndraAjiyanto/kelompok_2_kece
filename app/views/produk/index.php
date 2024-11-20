<!-- app/views/user/index.php -->
<h2>Daftar Produk</h2>
<a href="/produk/create">Tambah Produk Baru</a>
<ul>
    <?php foreach ($produks as $produk): ?>
        <div>
            <p><?= htmlspecialchars($produk['id_kategori']) ?> - <?= htmlspecialchars($produk['nama_produk']) ?> - <?= htmlspecialchars($produk['deskripsi']) ?> - <?= htmlspecialchars($produk['harga']) ?> - <?= htmlspecialchars($produk['id_user']) ?>
            <a href="/produk/edit/<?php echo $produk['id_produk']; ?>">Edit</a> |
            <a href="/produk/delete/<?php echo $produk['id_produk']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
