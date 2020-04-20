<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
</head>
<body>
    <h2>Form Edit Siswa</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo base_url('siswa/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('siswa/update') ?>
        <table>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxlength="7" autofocus value="<?= $nim; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td>
                    <input type="text" name="nama" size="50" value="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php if ($jenis_kelamin=="L") echo 'checked' ?>> Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php if ($jenis_kelamin=="P") echo 'checked' ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir :</td>
                <td>
                    <input type="text" name="tempat_lahir" size="30" value="<?= $tempat_lahir; ?>"> / <input type="date" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td>
                    <textarea name="alamat" cols="50" rows="5"><?= $alamat; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Telp :</td>
                <td>
                    <input type="text" name="telepon" pattern="{0-9}+" value="<?= $telepon ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update Data">
                </td>
            </tr>
        </table>
        <?= form_close() ?>
    </p>
</body>
</html>