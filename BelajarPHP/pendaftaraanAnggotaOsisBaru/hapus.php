<?php include('database.php') ?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM daftar_siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
    }

    if($query){
        header('location: daftar_siswa_admin.php');
    }else{
        echo"gagal";
    }
?>