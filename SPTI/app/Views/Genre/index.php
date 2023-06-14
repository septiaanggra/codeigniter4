<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>data genre </h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama genre</th>
            <th>Created At<pas/th>
            <th>Update At</th>
        </tr>
        <?php $i= 1; ?>
        <?php foreach ($data_genre as $Genre) : ?>
            </tr>
            <td><?= $i++;?></td>
            <td><?php echo $Genre['nama_genre'] ?></td>
            <td><?php echo $Genre['created_at'] ?></td>
            <td><?php echo $Genre['update_at']?></td>
        </tr>
    <?php endforeach; ?>

    </table>
</body>
</html>
