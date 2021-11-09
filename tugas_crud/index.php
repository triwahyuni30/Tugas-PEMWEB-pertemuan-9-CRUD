<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Halaman Daftar Mahasiswa SIK</title>
        </head>

        <body>
            <h2>Daftar Mahasiswa SIK</h2>
            <a href="form_input.php" styles="padding:0.4% 0.8%; background-color: green; color:#fff; border-radius: 2px;"> Tambahkan Data</a><br>
            <table border="1" cellspacing="0" width="50%">
                <tr>
                    <td>Email:</td>
                    <td>Nama:</td>
                    <td>NIM:</td>
                    <td>Angkatan:</td>
                    <td>No HP:</td>
                    <td>Opsi:</td>
                </tr>  
                <?php
                include 'koneksi.php';
                $email = 1;
                $select = mysqli_query($conn, "SELECT * FROM daftar mahasiswa sik");
                while($hasil = mysqli_fetch_array($select)){
                ?>
                <tr>
                    <td><?php echo $hasil['email'] ?></td>
                    <td><?php echo $hasil['nama'] ?></td>
                    <td><?php echo $hasil['nim'] ?></td>
                    <td><?php echo $hasil['angkatan'] ?></td>
                    <td><?php echo $no_hp++ ?></td>
                    <td>
                        <a href="edit.php?email=<?php echo $hasil['email'] ?>">Edit</a> ||
                        <a href="delete.php?email=<?php echo $hasil['email'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>  
            </table>
        </body>
    </html>
