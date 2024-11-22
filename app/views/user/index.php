

        <thead>
            <tr>
                <th><center>Nama</center></th>
                <th><center>Email</center></th>
                <th><center>Password</center></th>
                <th><center>Alamat</center></th>
                <th><center>Aksi</center></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['nama']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['password']) ?></td>
                    <td><?= htmlspecialchars($user['alamat']) ?></td>
                    <td>
                        <a href="/user/edit/<?php echo $user['id_user']; ?>" class="btn btn-warning btn-sm fw-bold">Edit</a>
                        <a href="/user/delete/<?php echo $user['id_user']; ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

