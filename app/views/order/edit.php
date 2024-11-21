<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit Order</h2>
    <form action="/order/update/<?php echo $order['id_order']; ?>" method="POST">

    <label for="produk">Pilih Produk</label>
    <select id="produk" name="id_produk">
        <?php foreach($produk as $row){?>
        <option value="<?php echo $row['id_produk']?>"><?php echo $row['nama_produk']?></option>
        <?php
    };
    ?>
    </select>

        <br>
        <label for="user">Pilih User</label>
    <select id="user" name="id_user">
        <?php foreach($user as $row){?>
        <option value="<?php echo $row['id_user']?>"><?php echo $row['nama']?></option>
        <?php
    };
    ?>
    </select>
        <br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="<?php echo $order['status']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/order/index">Back to List</a>
</body>
</html>
