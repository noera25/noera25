<!DOCTYPE html>
<html>

<head>
    <style>
#customers {
  font-family: Arial Black, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: middle;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button-hapus {
  background-color: #B22222; /* Fire Brick */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table border="1" id="customers">
        <tr>
            <th>No</th>
            <th>id_mahasiswa</th>
            <th>nama</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswaa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telepon']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button-hapus">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>