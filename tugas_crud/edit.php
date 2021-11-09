<?php
    include 'koneksi.php';
    $edit = mysqli_query($conn, "SELECT * FROM daftar mahasiswa sik WHERE email ='".$_GET['email']."'");
    $result = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Halaman Mengedit Data</title>
        </head>
        <body>
            <h2>Daftar Mahasiswa SIK</h2>
            <a href="index.php" styles="padding:0.4% 0.8%; background-color: green; color:#fff; border-radius: 2px;"> Tambahkan Data</a><br>
            <br>
            <form action="" method="POST">
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="email" placeholder="Email" value="<?php echo $result['email'] ?>" required></td>
                        </tr>  
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Nama" value="<?php echo $result['nama'] ?>" required></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><input type="text" name="nim" placeholder="NIM" value="<?php echo $result['nim'] ?>" required></td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td><input type="text" name="angkatan" placeholder="Angkatan" value="<?php echo $result['angkatan'] ?>" required></td>
                        </tr>    
                        <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td><input type="text" name="no_hp" placeholder="No HP" value="<?php echo $result['no_hp'] ?>" required></td>
                        </tr>   
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="simpan" value="Simpan"></td>
                        </tr>
                    </table>   
            </form> 
            <?php 
            include 'koneksi.php';
            if(isset($_POST['edit'])){
            $update = mysqli_query($conn, "UPDATE daftar mahasiswa sik SET
             '".$_POST['email']."',
             '".$_POST['nama']."',
             '".$_POST['nim']."',
             '".$_POST['angkatan']."',
             '".$_POST['no_hp']."'
             WHERE email = '".$_GETT['email']."'");
            if($update){
                echo 'edit berhasil tersimpan';
            }else{
                echo 'edit gagal tersimpan';
                }
            }
            ?>
        </body>
    </html>