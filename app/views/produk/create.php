

<form action="/produk/store" method="POST" class="border p-4 rounded shadow-sm bg-light">
<label for="kategori" class="form-label fw-bold">Pilih Kategori :</label>
    <select id="kategori" name="id_kategori" class="form-control" required>
    <option value="" disabled selected> Pilih Kategori :</option>
        <?php foreach($kategori as $row){?>
        <option value="<?php echo $row['id_kategori']?>" class="form-control"><?php echo $row['nama_kategori']?></option>
        <?php
    };
    ?>
    </select>
            <div class="mb-3">
                <label for="nama_produk" class="form-label fw-bold">Nama Produk :</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label fw-bold">Harga :</label>
                <input type="text" name="harga" id="harga" class="form-control" required>
            </div>
            <div class="mb-3">
            <label for="user" class="form-label fw-bold">Pilih User :</label>
    <select id="user" name="id_user" class="form-control">
    <option value="" disabled selected> Pilih User :</option>
        <?php foreach($user as $row){?>
        <option value="<?php echo $row['id_user']?>" class="form-control"><?php echo $row['nama']?></option>
        <?php
    };
    ?>
    </select>
            </div>
            <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
            <a href="/produk/index" class="btn btn-secondary fw-bold">Batal</a>
        </form>

