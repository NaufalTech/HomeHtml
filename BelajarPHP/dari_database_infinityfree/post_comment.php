<?php include("database.php"); ?>

// <?php

//     if(isset($_POST['kirim'])){
//         $nama = $_POST['nama_pembuat'];
//         $isi_komentar = $_POST['comment'];

//         // buat querynya
//         $kirimkan = "INSERT INTO comment_table (name, isi_comment) VALUE ('$nama', '$isi_komentar')";
//         $query = mysqli_query($conn, $kirimkan);
//     }

//     // if untuk apakah qery nya tersimpan di comment_table
//     if($query){
//         // echo"komentar berhasil terkirim";
//         header('location: networking.php');
//         echo"terkirim";
//     }else{
//         echo"komentar tidak berhasil terkirim";
//     }
// ?>

 <?php
            if(isset($_POST['kirim'])){
                $nama = $_POST['nama_pembuat'];
                $isi_komentar = $_POST['comment'];

                // buat querynya
                $kirimkan = "INSERT INTO comment_table(name,isi_comment) VALUES('$nama', '$isi_komentar')";
                $query = mysqli_query($conn, $kirimkan);
            }

            // if untuk apakah qery nya tersimpan di comment_table
            if($query){
                 echo"komentar berhasil terkirim";
                header('location: networking.php');
                // echo"terkirim";
            }else{
                echo"komentar tidak berhasil terkirim";
            }
        ?>