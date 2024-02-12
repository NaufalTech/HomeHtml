<?php include("database.php") ?>

<!DOCTYPE html>
<html>
    <head>
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
                <!-- <th>id</th> -->
                <th>Nama</th>
                <!-- <th>nama Belakang</th> -->
                <th>Kelas</th>
                <th>Agama</th>
                <th>Umur</th>
                <th>Kelamin</th>
            </thead>
            <tbody>
                <?php
                $daftar_siswa = "SELECT * FROM daftar_siswa";
                $query = mysqli_query($db, $daftar_siswa);

                while($perSiswa = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$perSiswa['first_name']." ".$perSiswa['last_name']."</td>";
                    // echo"<td>".$perSiswa['last_name']."</td>";
                    echo"<td>".$perSiswa['class']."</td>";
                    echo"<td>".$perSiswa['religion']."</td>";
                    echo"<td>".$perSiswa['age']." tahun</td>";
                    echo"<td>".$perSiswa['gender']."</td>";
                    echo"</tr>";
                }

                ?>


            </tbody>
        </table>
        
        <p>Total siswa : <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>