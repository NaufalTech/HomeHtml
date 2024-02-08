<?php

    // include("database.php");

    // $sql = "INSERT INTO comment (user, password)
    // VALUES ('Spongebob' , 'hehe')";

    // mysqli_query($conn, $sql);

    // mysqli_close($conn);

    include("database.php")
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="comment.css">

    </head>

    <body>
        

        <section id="postComment">
            <div id="respond">

            <h3>Leave a Comment</h3>
        
                <form action="post_comment.php" method="POST" id="commentform">
                
                    <label for="nama_pembuat" class="required">Your name</label>
                    <input type="text" name="nama_pembuat" id="comment_author" value="" tabindex="1" required="required">
                
                    <!-- <label for="email" class="required">Your email;</label>
                    <input type="email" name="email" id="email" value="" tabindex="2" required="required"> -->
                
                    <label for="comment" class="required">Your message</label>
                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
                    
                    <h6>comment_post_ID value hard-coded as 1</h6>
                    <!-- <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" /> -->
                    <input name="kirim" type="submit" value="Submit comment" />
            
                </form>
        
            </div>

        </section>

        <diV class="wrapper-daftarComment">
        <p>daftar komentar</p>
            <diV class="daftarComment">
                
                <?php
                $pilih = "SELECT * FROM comment_table";
                $query = mysqli_query($db, $pilih);

                while($daftar_comment = mysqli_fetch_array($query)){
                    echo"<br>";
                    echo"<div class='perComment'>";
                        // echo"<td>".$daftar_comment['id']."</td>";
                        echo"<div class='bagian_nama'>";
                            echo"<div class ='nama'>".$daftar_comment['name']."</div>";
                            echo"<div class='tanggal'>".$daftar_comment['date']."</div>";
                        echo"<div class='isiComment'>".$daftar_comment['isi_comment']."</div>";
                    echo"</div>";
                    
                    echo"<br>";
                    echo"<hr class='hr'>";
                }

                echo mysli_num_rows($query);
                ?>
        </div>
          
       

        
        
    </body>

</html>