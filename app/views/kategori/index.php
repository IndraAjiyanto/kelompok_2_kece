<!-- app/views/kategori/index.php -->
<h2>Daftar Kategori</h2>
<a href="/kategori/create">Tambah Kategori</a>
<ul>
    <?php foreach ($kategori as $kategoris): ?>
        <div>
            <p><?= htmlspecialchars($kategoris['nama_kategori']) ?> - <?= htmlspecialchars($kategoris['deskripsi']) ?>
            <a href="/kategori/edit/<?php echo $kategoris['id_kategori']; ?>">Edit</a> |
            <a href="/kategori/delete/<?php echo $kategoris['id_kategori']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

