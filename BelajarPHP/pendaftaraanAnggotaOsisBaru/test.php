

<!DOCTYPE html>
<?php include("database.php"); ?>
<html>
    <body>

    <?php
        if(isset($_POST['kirim'])){
            $kelamin = $_POST['select'];
            $agama = $_POST['type'];
            
            $tanggalB = time();
            $tanggalLagi = time();
        

            $kirim = "INSERT INTO kelamin (gender, religion, date) VALUES ('$kelamin', '$agama','$tanggalLagi')";
            $query = mysqli_query($db, $kirim);
            
        }

        if($query){
            // echo"sukses <br>";
            header('location: test.php?status=sukses');
        }else{
            // header('location: test.php?status=gagal');
            echo "<P>gagal</P>";
        }

        date_default_timezone_set('UTC');
        echo time();
        echo "<br>";
        echo 'Now: '. time();
        echo "<br>";
        // echo $tanggalC = date_format(time() , 'l jS \of F Y h:i:s A');
        echo date('l jS \of F Y h:i:s A');

        // echo $_GET['type'];
        // echo "<br>";
        // echo $_GET['select'];
        // echo $_SERVER['type'];
    ?>

        <form action="test.php" method="POST">
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
            <!-- <input type="hidden"> -->
            
            <input type="submit" name="kirim">
        </form>

        
        <br>

        <?php
            // if(isset($_POST['kirim'])){
            //     $agama = $_POST['type'];

            //     $send= "INSERT INTO kelamin (religion) VALUE ('$agama')";
            //     $que = mysqli_query($db, $send);
            // }

            // if($que){
            //     echo"sukses";
            // }
            // // $pilih = "SELECT * FROM comment_table ORDER BY date DESC";
            // //         $query = mysqli_query($db, $pilih);

            //         function($tanngalBaru){
                        
            //         };
                    
            //         $tanggal1 = date_create($now1 = 'now');
            //        $tanggalAgo = date_format($tanggal1, 'Y');
            //        echo $tanggalAgo;
        
            $recieve = "SELECT * FROM kelamin ORDER BY date_post DESC";
            $menerima = mysqli_query($db, $recieve);

            function tanggalD ($tanggalF){
                $tanggalF = date_create($tanggalF);
                echo date_format($tanggalF, 'Y-m-d H:i:s');
                // $tanggalF = date('l jS \of F Y h:i:s A');

                return $tanggalF;
            }

            while($menampilkan = mysqli_fetch_array($menerima)){
                echo "<div>";
                    echo $menampilkan['gender']."<br>";
                    echo $menampilkan['religion']."<br>";
                    echo $menampilkan['date_post']."<br>";
                    $tanggalE = date_create($menampilkan['date']);
                    // echo date_format($tanggalE, 'Y-m-d H:i:s');
                    echo tanggalD($menampilkan['date'])."<br><br>";
                echo "</div>";

            }
                   

        ?> 
    </body>
</html>