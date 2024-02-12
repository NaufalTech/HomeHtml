<?php include("database.php"); ?>

<?php

    if(isset($_POST['kirim'])){
        $nama = filter_input(INPUT_POST , 'nama_pembuat' , FILTER_SANITIZE_SPECIAL_CHARS);
        $isi_komentar = filter_input(INPUT_POST , 'comment' , FILTER_SANITIZE_SPECIAL_CHARS);

        // buat querynya
        $kirimkan = "INSERT INTO comment_table (name, isi_comment) VALUES ('$nama', '$isi_komentar')";
        $query = mysqli_query($db, $kirimkan);
    }

    // if untuk apakah qery nya tersimpan di comment_table
    if($query){
        // echo"komentar berhasil terkirim";
        header('location: networking.php?status=sukses');
    }else{
        // echo"komentar tidak berhasil terkirim";
    }
?>