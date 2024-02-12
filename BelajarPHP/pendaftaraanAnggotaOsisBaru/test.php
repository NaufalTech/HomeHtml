<?php include("database.php") ?>

<!DOCTYPE html>
<html>
    <body>
        <form action="test.php" method="get">
            <select name="select">
                <option value="lakilaki">laki-laki</option>
                <option value="perempuan">perempuan</option>
                <option value="bencong">bencong</option>
            </select><br>
            <!-- <input type="radio" name="type" value="islam">islam<br>
            <input type="radio" name="type" value="kristen">kristen<br>
            <input type="radio" name="type" value="hindu">hindu<br>
            <input type="radio" name="type" value="budha">budha<br> -->
            <label ><input type="radio" name="type" id="jenisKelamin" value="islam">islam</label>
            <label ><input type="radio" name="type" id="jenisKelamin" value="kristen">kristen</label>
            <label ><input type="radio" name="type" id="jenisKelamin" value="hindu">hindu</label>
            <br>
            
            <input type="submit" name="kirim">
        </form>

        <?php
            if(isset($_GET['kirim'])){
                $kelamin = $_GET['select'];
                $agama = $_GET['type'];
            

                $kirim = "INSERT INTO kelamin (gender, religion) VALUE ('$kelamin', '$agama')";
                $query = mysqli_query($db, $kirim);
                
            }

            if($query){
                echo"sukses <br>";
            }else{
                echo"gagal";
            }

            echo $_GET['type'];
            echo "<br>";
            echo $_GET['select'];
            echo $_SERVER['type'];
        ?>
        <br>

        <?php
            if(isset($_POST['kirim'])){
                $agama = $_POST['type'];

                $send= "INSERT INTO kelamin (religion) VALUE ('$agama')";
                $que = mysqli_query($db, $send);
            }

            if($que){
                echo"sukses";
            }
            // $pilih = "SELECT * FROM comment_table ORDER BY date DESC";
            //         $query = mysqli_query($db, $pilih);

                    function($tanngalBaru){
                        
                    };
                    
                    $tanggal1 = date_create($now1 = 'now');
                   $tanggalAgo = date_format($tanggal1, 'Y');
                   echo $tanggalAgo;
                   

        ?> 
    </body>
</html>