<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form product</title>
</head>
<body>
    <h1><?= isset($product) ? 'Edit' : 'TAMBAH PRODUCT' ?></h1>
    <form method="post" action="index.php?action=<?= isset($product) ? 'update&id=' . $product['id'] : 'store' ?>">
        
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= isset($product) ? $product['name'] : '' ?>" required>

        <label for="price">Harga:</label>
        <input type="number" id="price" name="price" value="<?= isset($product) ? $product['price'] : '' ?>" required>

        <button type="submit">simpan</button>
    </form>
</body>
</html>
