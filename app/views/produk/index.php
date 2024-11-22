

        <thead>
            <tr>
                <th><center>Kategori</center></th>
                <th><center>Nama Produk</center></th>
                <th><center>Deskripsi</center></th>
                <th><center>Harga</center></th>
                <th><center>Nama Penjual</center></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produks as $produk): ?>
                <tr>
                    <td><?= htmlspecialchars($kategori->findKategori($produk['id_kategori'])) ?></td>
                    <td><?= htmlspecialchars($produk['nama_produk']) ?></td>
                    <td><?= htmlspecialchars($produk['deskripsi']) ?></td>
                    <td><?= htmlspecialchars($produk['harga']) ?></td>
                    <td><?= htmlspecialchars($user->findNama($produk['id_user'])) ?></td>
                    <td>
                        <a href="/produk/edit/<?php echo $produk['id_produk']; ?>" class="btn btn-warning btn-sm fw-bold">Edit</a>
                        <a href="/produk/delete/<?php echo $produk['id_produk']; ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

