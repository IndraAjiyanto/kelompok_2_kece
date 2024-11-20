<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="/order/update/<?php echo $order['id_order']; ?>" method="POST">

    <label for="produk">Pilih Produk</label>
    <select id="produk" name="id_produk">
        <?php foreach($produk as $row){?>
        <option value="<?php echo $row['nama_produk']?>"><?php echo $row['nama_produk']?></option>
        <?php
    };
    ?>
    </select>


        <label for="id_produk">Id Produk:</label>
        <input type="number" id="id_produk" name="id_produk" value="<?php echo $order['id_produk']; ?>" required>
        <br>
        <label for="id_user">Id User:</label>
        <input type="number" id="id_user" name="id_user" value="<?php echo $order['id_user']; ?>" required>
        <br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="<?php echo $order['status']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/order/index">Back to List</a>
</body>
</html>