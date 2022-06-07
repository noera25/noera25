<?php
  session_start();
  if(isset($_SESSION['username'])){
    echo " selamat datang " . $_SESSION['username'];
    echo "<a href='logout.php'> logout</a>";
  }

  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>

    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
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
  text-align: left;
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
  background-color: #B22222; /* red */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

</style>

</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a><br/>
    <a href = "login.php"> LOGIN </a>
    <br />
    <br />
    <table id="customers">
        <tr>
            <th>NO</th>
            <th>id_mahasiswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>telp</th>
            <th>prodi</th>
            <th>aksi</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>"class="button">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>"class="button-hapus">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>