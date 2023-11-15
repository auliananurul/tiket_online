<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"
        <meta name="Viewport" contet="width=device-width, initial-scale=1.0"
        <title>Tampil Data</title>
</head>
<body>
    <pre>
    =============================================
    <b>PEMESANAN TIKET ONLINE JAKARTA - MALAYSIA</b>
    =============================================

<?php
$no = 1;
forech ($penumpang as $u) : ?>No Tiket
Nama                : <?= $u->nama ?><br>
Nama Pesawat        : <?= $u->pesawat ?><br>
Kelas               : <?= $u->kelas ?><br>
Harga Tiket         : <?= $u->harga ?><br>
Jumlah Tiket        : <?= $u->jumlah ?><br>
Total Bayar         : <?= $u->harga*$u->jumlah ?>


<?= anchor('tiket/edit/'.$u->id,'<input type-"button" name="submit' value="Edit"'); ?> <?= anchor('tiket/hapus/'.$u->id,'<input type="button" name="submit" values="Hapus"); ?>
================================================================

<?php endforeach; ?>
                        <?= anchor('tiket/tambah','<input type="button" balue="Tambah Data"');?>
</pre>
</body>
</html>