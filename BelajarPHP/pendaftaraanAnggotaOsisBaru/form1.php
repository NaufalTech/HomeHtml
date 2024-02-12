<?php include("database.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/formPendaftaran.css">
    </head>
    <body>
        <!-- <form action="formPendaftaran.php" method="post">
            <label>username :</label>
            <input type="text" name="username"><br><br>

            <label>password :</label>
            <input type="password" name="password"><br>
            <input type="submit" name value="submit">
        </form> -->
        
        <h1 style="margin-bottom: 100px;" >FORMULIR PENDAFTARAN</h1>
        <form action="proses_pendaftaran.php" method="GET" id="formPendaftaran" >
            <label for="namaDepan">Nama depan :</label>
                <input type="text" name="namaDepan" id="namaDepan">
            <br>
            <label for="namaBelakang">Nama belakang :</label>
                <input type="text" name="namaBelakang" >
            <br>
            <label for="umur">Umur :</label>
                <input type="number" name="umur" >
            <br>

            <label for="kelas_berapa">Kelas :</label>
                <select name="kelas_berapa" id="kelas_berapa"  style="width: inherit;">
                    <option style="display: none;"></option>
                    <option value="10 TKJ" >10 TKJ</option>
                    <option value="10 TBSM">10 TBSM</option>
                    <option value="10 DKV">10 DKV</option>
                    <option value="10 K3R">10 K3R</option>
                    <option value="10 K2BT">10 K2BT</option>
                </select>
            <br>

            
            
            <label for="jenisKelamin" >Jenis kelamin :</label>
                
                    <label ><input type="radio" name="jenisKelamin" id="jenisKelamin" value="laki-laki">Laki-laki</label>
                    <label ><input type="radio" name="jenisKelamin" id="jenisKelamin" value="perempuan">Perempuan</label>
                    <label ><input type="radio" name="jenisKelamin" id="jenisKelamin" value="bencong">Bencong</label>
            <br>
            
            <label for="jenisAgama" >jenis agama :</label>
            <select name="jenisAgama" id="jenisAgama" >
                <option style="display: none;"></option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Budha</option>
                <option>Hindu</option>
                <option>Konghucu</option>

            </select>
            <br>
            <label for="tanggal_lahir">Tangal lahir :</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" >
            <br>
            <input type="submit" name="lanjut" value="KIRIM">
        </form>
    </body> 

    <?php
        // echo "{$_POST["username"]} <br>";
        // echo "{$_POST["password"]} <br>";
    ?>
</html>