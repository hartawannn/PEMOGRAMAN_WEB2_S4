<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form user</title>
</head>
<body>
    <h1><?= isset($user) ? 'Edit' : 'TAMBAH USER' ?></h1>
    <form method="post" action="index.php?action=<?= isset($user) ? 'user_update&id=' . $user['id'] : 'user_store' ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="name" value="<?= isset($user) ? $user['name'] : '' ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= isset($user) ? $user['email'] : '' ?>" required>

        <button type="submit">simpan</button>
    </form>
</body>
</html>