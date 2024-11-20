<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/order/create">Tambah Pengguna Baru</a>
<ul>
    <?php foreach ($orders as $order): ?>
        <div>
            <p><?= htmlspecialchars($produk->findNama($order['id_produk'])) ?> - <?= htmlspecialchars($user->findNama($order['id_user'])) ?> - <?= htmlspecialchars($order['status']) ?>
            <a href="/order/edit/<?php echo $order['id_order']; ?>">Edit</a> |
            <a href="/order/delete/<?php echo $order['id_order']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
