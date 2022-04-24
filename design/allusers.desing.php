<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
        </tr>
        <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['firstname']?></td>
            <td><?=$user['email']?></td>
            <td><?= ($user['role'] == 1) ? 'admin' : 'user'; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>