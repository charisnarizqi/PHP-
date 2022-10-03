<?php

require_once 'lingkaran.php';
require_once 'psegipanjang.php';
require_once 'segitiga.php';

$lingkaran = new lingkaran();
$psegipanjang = new psegipanjang();
$segitiga = new segitiga();

$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 5 PHP</title>
</head>
<body>
    <table class="table" style="width:70%; margin-top:3%;" align="center">
    <thead class="table-primary">
        <tr>
            <?php
            $no = 1;
            foreach ($judul as $judulnya){
                ?>
                <th><?= $judulnya ?></th>
                <?php
            }
            ?>
        </tr>
    </thead>
    <tbody class="table-light">
        <tr>
            <td>1</td>
            <td><?= $lingkaran->namaBidang() ?></td>
            <td>
                <ul style="list-style:none; padding-left:0px;" >
                    <li>Phi : <?= $lingkaran->phi ?></li>
                    <li>Jari-jari : <?= $lingkaran->jari2 ?></li>
                </ul>
            </td>
            <td><?= $lingkaran->luasBidang() ?></td>
            <td><?= $lingkaran->kelilingBidang() ?></td>
        </tr>
        <tr>
        <td>2</td>
            <td><?= $persegiPanjang->namaBidang() ?></td>
            <td>
                <ul style="list-style:none; padding-left:0px;" >
                    <li>Panjang : <?= $persegiPanjang->panjang ?></li>
                    <li>Lebar : <?= $persegiPanjang->lebar ?></li>
                </ul>
            </td>
            <td><?= $persegiPanjang->luasBidang() ?></td>
            <td><?= $persegiPanjang->kelilingBidang() ?></td>
        </tr>
        <td>3</td>
            <td><?= $segitiga->namaBidang() ?></td>
            <td>
                <ul style="list-style:none; padding-left:0px;" >
                    <li>Alas : <?= $segitiga->alas ?></li>
                    <li>Tinggi : <?= $segitiga->tinggi ?></li>
                </ul>
            </td>
            <td><?= $segitiga->luasBidang() ?></td>
            <td><?= $segitiga->kelilingBidang() ?></td>
        </tr>
    </tbody>
</body>
</html>