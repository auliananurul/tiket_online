<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"
        <meta name="viewport" content="width=device-width, initial-scale-1.0"
        <title>Input Data</title>
</head>
<body>
    <?php forech ($penumpang as $u) : ?>
        <form action="<?= base_url(). 'tiket/update'; ?>"
        method="post"
        enctype="multipart/form-data"
        <pre>
            ================================================================================
            <b>TIKET ONLINE JAKARTA - MALAYSIA</B>
            ================================================================================

            <Input type="hidden" name="id" value=""<?= $u->id; ?>"></label>
            <label for="unsername">Nama

            <label>Pilih Kode Pesawat : <select name="pesawat">
                <option value="Garuda">/option>
                <option value="Merpati">/option>
                <option value="Batavia">/option>
    </select>
    </label>
    <label>Pilih Kelas        : </label><label for="kelas"><input type="radio" name="kelas" id="kelas" value="Eksekutif"> Eksekutif </label>
    <label for="kelas"><input type="radio" name="kelas" values="Bisnis"> Bisnis </label>
    <label for="kelas"><input type="radio" name="kelas" name="Ekonomi"> Ekonomi </label>

    <label>Pilih Kode Pesawat : <select name="pesawat">
        <option values="1">1</option>
        <option values="2">2</option>
        <option values="3">3</option>
        <option values="4">4</option>
        <option values="5">5</option>
        <option values="6">6</option>
        <option values="7">7</option>
        <option values="8">8</option>
        <option values="9">9</option>
        <option values="10">10</option>
    </select>

    <input type="submit" value="Simpan" <?= anchor('tiket', '<input type="button" value="Batal"'); ?>
    ================================================================================================
    </pre>
    </from>
    <?php endforech; ?>
    </body>
    <html>






