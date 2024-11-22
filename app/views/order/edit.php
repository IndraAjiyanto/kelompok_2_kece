
<!-- app/views/order/edit.php -->

        <form action="/order/update/<?php echo $order['id_order']; ?>" method="POST" class="border p-4 rounded shadow-sm bg-light">
            <div class="mb-3">
            <label for="produk" class="form-label fw-bold">Pilih Produk:</label>
                <select id="produk" name="id_produk" class="form-control">
                    <?php foreach($produk as $row){?>
                        <option value="<?php echo $row['id_produk'] ?>" <?php echo ($row['id_produk'] == $order['id_produk']) ? "selected" : ""?> ><?php echo $row['nama_produk']?></option>
                    <?php
                        };
                    ?>
                </select>
            </div>
            <div class="mb-3">
            <label for="user" class="form-label fw-bold">Pilih User:</label>
                <select id="user" name="id_user" class="form-control">
                    <?php foreach($user as $row){?>
                        <option value="<?php echo $row['id_user']?>" <?php echo $row['id_user'] == $order['id_user'] ? "selected" : ""?>><?php echo $row['nama']?></option>
                    <?php
                        };
                    ?>
                </select>
            </div>
            <div class="mb-3">
            <label for="status" class="form-label fw-bold">Status:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="Pesanan berhasil dipesan" <?php echo $order['status'] == 'Pesanan berhasil dipesan' ? 'selected' : ''; ?>>Pesanan berhasil dipesan</option>
                <option value="Pesanan sedang dikemas" <?php echo $order['status'] == 'Pesanan sedang dikemas' ? 'selected' : ''; ?>>Pesanan sedang dikemas</option>
                <option value="Pesanan sedang dikirim" <?php echo $order['status'] == 'Pesanan sedang dikirim' ? 'selected' : ''; ?>>Pesanan sedang dikirim</option>
                <option value="Pesanan diterima" <?php echo $order['status'] == 'Pesanan diterima' ? 'selected' : ''; ?>>Pesanan diterima</option>
                <option value="Pesanan dibatalkan" <?php echo $order['status'] == 'Pesanan dibatalkan' ? 'selected' : ''; ?>>Pesanan dibatalkan</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary fw-bold">Update</button>
            <a href="/order/index" class="btn btn-secondary fw-bold">Kembali</a>
        </form>
    </div>

