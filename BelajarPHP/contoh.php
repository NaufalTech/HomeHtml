<!DOCTYPE html>
<html>
    <head>
    <?php include('database.php'); ?>

    </head>
    <body>
  
        <form method="POST" action="contoh.php">
            <label for="nama">nama :</label>
            <input type="text" name="nama">
            
            <br>
            <!-- <label for="password">password :</label>
            <input type="text" name="password"> -->

            <input type="submit" name="kirim" value="login">
        </form>

        
    </body>
</html>

<?php
    // include('database.php');

    if(isset($_POST['kirim'])) {
        // $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_SPECIAL_CHARS);
        $nama = filter_input(INPUT_POST , 'nama' , FILTER_SANITIZE_SPECIAL_CHARS);
        
    }
    
    echo "{$nama}";
?>