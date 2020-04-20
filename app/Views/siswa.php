<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Data Siswa</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo base_url('siswa/tambah') ?>'">
            Tambah Data
        </button>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamins</th>
                <th>Tempat/Tgl.Lahir</th>
                <th>Alamat</th>
                <th>Telp/HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 0;
            foreach ($tampildata as $row) :
                $nomor++;
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row->nim ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jenis_kelamin ?></td>
                <td><?= $row->tempat_lahir .'/'.$row->tanggal_lahir ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->telepon ?></td>
                <td>
                    <button type="button" onclick="hapus('<?= $row->id ?>')">Hapus</button>
                    <button type="button" onclick="window.location='<?= site_url('siswa/edit/' . $row->id) ?>'">Edit</button>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <script>
        function hapus(id) {
            var pesan = confirm('Yakin hapus data siswa ?');

            if (pesan) {
                window.location.href = ("<?= site_url('siswa/hapus/') ?>") + id;
            } else return false;
        }
    </script>
</body>
</html>