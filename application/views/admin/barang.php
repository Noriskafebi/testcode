<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tittle; ?></title>
</head>

<body>
    <h1>Daftar Tabel Barang <?php echo $tittle; ?></h1>

    <table border="1">

        <tr>
            <th>Nomor</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>

        </tr>


        <?php
        $no = 1;
        foreach ($barang as $b) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b->nama_barang ?></td>
                <td><?php echo $b->stok ?></td>
                <td><?php echo $b->harga ?></td>
            </tr>

        <?php endforeach; ?>



    </table>
</body>

</html>