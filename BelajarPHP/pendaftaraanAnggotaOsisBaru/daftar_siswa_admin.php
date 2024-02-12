<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include('database.php') ?>
        <style>
            table {
                border: solid 2px black;
            }

            th {
                border: solid 2px black;
            }

            td {
                border: solid 2px black;
                padding: 10px;
            }

        </style>
        
    </head>
    <body>
    <a href="index.html">kembali</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>UMUR</th>
                    <th>KELAS</th>
                    <th>KELAMIN</th>
                    <th>AGAMA</th>
                    <th>TANGGAL LAHIR</th>
                    <!-- <th>TANGGAL DIKIRIM</th> -->
                    <th>PERINTAH</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM daftar_siswa ORDER BY date_post DESC";
                // $sql1 = "";
                $query = mysqli_query($db, $sql, );

                while($hasil = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$hasil['id']."</td>";
                    echo"<td>".$hasil['first_name']."</td>";
                    echo"<td>".$hasil['last_name']."</td>";
                    echo"<td>".$hasil['age']."</td>";
                    echo"<td>".$hasil['class']."</td>";
                    echo"<td>".$hasil['gender']."</td>";
                    echo"<td>".$hasil['religion']."</td>";
                    echo"<td>".$hasil['date_birth']."</td>";
                    echo"<td>";
                    echo "<a href='index.html?id=".$hasil['id']."'>edit</a> | ";
                    echo "<a href='hapus.php?id=".$hasil['id']."'>hapus</a>";
                    echo"</td>";
                    echo"</tr>";
                }
                ?>
            </tbody>
        </table>

        <?php 
        //    echo mys
        ?>
        <p>Total: <?php  echo mysqli_num_rows($query) ?></p>

        
    </body>
</html>