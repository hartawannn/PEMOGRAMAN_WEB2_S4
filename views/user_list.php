<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar user</title>
</head>
<style>
    body{
        text-align : center;
    }
    .center{
        margin-left : auto;
        margin-right : auto;    
    }
</style>
<body>
    <h1>Daftar User</h1>
    <a href="index.php?action=home">branda</a>
    <table border="1"class=center>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
             <th><a href="index.php?action=user_create">Tambah user </a></th>   
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="index.php?action=user_edit&id=<?= $user['id'] ?>">edit</a>
                    <a href="index.php?action=user_delete&id=<?= $user['id'] ?>" onclick="return confirm('hapus user ini?')">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>