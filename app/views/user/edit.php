

        
        <form action="/user/update/<?php echo $user['id_user']; ?>" method="POST" class="border p-4 rounded shadow-sm bg-light">
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($user['nama']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="3" required><?php echo htmlspecialchars($user['alamat']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary fw-bold">Update</button>
            <a href="/user/index" class="btn btn-secondary fw-bold">Kembali</a>
        </form>
    </div>
    <!-- Bootstrap JS -->


