<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Buku</h1>
    <table border="1", cellspacing="5", callpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Halaman</th>
            
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_buku as $row) : ?>
        <tr>
            <td><?= $i++;?></td>
            <td><?php echo $row ['nama_buku']?></td>
            <td><?= $row ['halaman']?></td>
           
        </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>