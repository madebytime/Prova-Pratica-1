<?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $dbname ='etapa1';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $sql = 'SELECT id FROM client';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) >= 1) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Id: " . $row["id"]. "<br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>