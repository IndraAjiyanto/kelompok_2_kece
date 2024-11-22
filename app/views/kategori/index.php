
<div class="table-responsive">

    <thead>
            <tr>
                <th><center>Nama</center></th>
                <th><center>Deskripsi</center></th>
                <th><center>Aksi</center></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategori as $kategoris): ?>
                <tr>
                    <td><?= htmlspecialchars($kategoris['nama_kategori']) ?></td>
                    <td><?= htmlspecialchars($kategoris['deskripsi']) ?></td>
                    <td>
                        <a href="/kategori/edit/<?php echo $kategoris['id_kategori']; ?>" class="btn btn-warning btn-sm fw-bold">Edit</a>
                        <a href="/kategori/delete/<?php echo $kategoris['id_kategori']; ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>


