
<!-- app/views/order/index.php -->
<thead>
            <tr>
                <th><center>Nama Produk</center></th>
                <th><center>Nama Pembeli</center></th>
                <th><center>Status Pembelian</center></th>
                <th><center>Aksi</center></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= htmlspecialchars($produk->findNama($order['id_produk'])) ?></td>
                    <td><?= htmlspecialchars($user->findNama($order['id_user'])) ?></td>
                    <td><?= htmlspecialchars($order['status']) ?></td>
                    <td>
                        <a href="/order/edit/<?php echo $order['id_order']; ?>" class="btn btn-warning btn-sm fw-bold">Edit</a>
                        <a href="/order/delete/<?php echo $order['id_order']; ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
