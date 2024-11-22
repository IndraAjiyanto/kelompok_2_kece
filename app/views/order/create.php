<<<<<<< HEAD
<!-- app/views/order/create.php -->
        <form action="/order/store" method="POST" class="border p-4 rounded shadow-sm bg-light">
            <div class="mb-3">
                <label for="produk" class="form-label fw-bold">Pilih Produk:</label>
                <select id="produk" name="id_produk" class="form-control" required>
                <option value="" disabled selected> Pilih Produk</option>
                    <?php foreach($produk as $row){?>
                        <option value="<?php echo $row['id_produk']?>" class="form-control"><?php echo $row['nama_produk']?></option>
                    <?php
                        };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label fw-bold">Pilih Pembeli:</label>
                <select id="user" name="id_user" class="form-control" required>
                <option value="" disabled selected> Pilih Pembeli </option>
                    <?php foreach($user as $row){?>
                        <option value="<?php echo $row['id_user']?>" class="form-control"><?php echo $row['nama']?></option>
                    <?php
                        };
                    ?>
                </select>
            </div>
            <div class="mb-3">
            <label for="status" class="form-label fw-bold">Pilih Status:</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="" disabled selected> Pilih Status </option>
                    <option value="Pesanan berhasil dipesan" class="form-control">Pesanan berhasil dipesan</option>
                    <option value="Pesanan sedang dikemas" class="form-control">Pesanan sedang dikemas</option>
                    <option value="Pesanan sedang dikirim" class="form-control">Pesanan sedang dikirim</option>
                    <option value="Pesanan diterima" class="form-control">Pesanan diterima</option>
                    <option value="Pesanan dibatalkan" class="form-control">Pesanan dibatalkan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
            <a href="/order/index" class="btn btn-secondary fw-bold">Batal</a>
        </form>
    </div>
=======
>>>>>>> main
