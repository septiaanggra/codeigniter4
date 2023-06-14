<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>data genre </h1>
    <table border="1" cellspacing="0" cellpadding="4">
        <tr>
            <th>No</th>
            <th>Nama Genre</th>
            <th>Created At</th>
            <th>Update  At</th>
        </tr>
        <?php $i= 1; ?>
        <?php foreach ($data_genre as $semuagenre) : ?>
            </tr>
            <td><?= $i++;?></td>
        </td>
            <td><?php echo $semuagenre['nama_genre'] ?></td>
            <td><?= $semuagenre['created_at'] ?></td>
            <td><?= $semuagenre['update_at']?></td>
        </tr>
    <?php endforeach?>

    </table>
</body>
</html>
