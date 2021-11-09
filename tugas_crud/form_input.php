<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Halaman Formulir Input Data</title>
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
                            <td><input type="text" name="email" placeholder="Email"></td>
                        </tr>  
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Nama"></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><input type="text" name="nim" placeholder="NIM"></td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td><input type="text" name="angkatan" placeholder="Angkatan"></td>
                        </tr>    
                        <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td><input type="text" name="no_hp" placeholder="No HP"></td>
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
            if(isset($_POST['simpan'])){
            $insert = mysqli_query($conn, "INSERT INTO daftar mahasiswa sik VALUES
             ('".$_POST['email']."',
             '".$_POST['nama']."',
             '".$_POST['nim']."',
             '".$_POST['angkatan']."',
             '".$_POST['no_hp']."',)");
            if($insert){
                echo 'berhasil tersimpan';
            }else{
                echo 'gagal tersimpan';
                }
            }
            ?>
        </body>
    </html>