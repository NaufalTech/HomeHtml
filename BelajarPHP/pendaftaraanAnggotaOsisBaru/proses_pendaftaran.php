<?php include("database.php"); ?>

<?php

if(isset($_POST['lanjut'])){

    $nama_depan = $_POST['namaDepan'];
    $nama_belakang = $_POST['namaBelakang'];
    $usia = $_POST['umur'];
    $kelas = $_POST['kelas_berapa'];
    $kelamin = $_POST['jenisKelamin'];
    $agama = $_POST['jenisAgama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $id = rand();

// if($_SERVER['REQUEST METHOD'] == 'POST'){
//      $kelas = $_POST['kelas_berapa'];
// }

    $kirim = "INSERT INTO daftar_siswa (id, first_name, last_name, age, class, gender, religion, date_birth)
                VALUES ('$id','$nama_depan', '$nama_belakang', '$usia', '$kelas','$kelamin', '$agama', '$tanggal_lahir')";
    // $send ="INSERT INTO daftar_calon_osis (first_name, last_name) VALUES ('$nama_depan', '$nama_belakang')";
    $query = mysqli_query($db, $kirim);
}

    if($query){
        header('location: index.html?status=berhasil');
    } else {  
        header('location: index.html?status=gagal');
        echo "gagal";
    }
    // , class, gender, religion, date_birth
    // , '$kelas', '$kelamin', '$agama', '$tanggal_lahir'
    echo "<br>";
    echo $nama_depan;
    echo '<br>';
    echo $nama_belakang;
    echo '<br>';
    echo $usia;
    echo '<br>';
    echo $kelas;
    echo '<br>';
    echo $kelamin;
    
?>