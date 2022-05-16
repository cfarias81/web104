<?php
      
        /* Verificar se o formulário foi submetido */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $name = 'root';
            $password = 'mysql';
            $db = filter_input(INPUT_POST, 'database');
            $brand = filter_input(INPUT_POST, 'brand');
            $model = filter_input(INPUT_POST, 'model');
            $year = filter_input(INPUT_POST, 'year');
          
            
            $host = 'localhost';
            $port = 3306; 
            
            

            /* validar os dados recebidos do formulario */
            //if (empty($name)||empty($password)){
            //    echo "You must log in!  ";
            //    exit();
           // }    
        }
        else{
        echo " Error, login not submited! ";
        exit();
        }


        /* estabelece a ligação à base de dados */
        $conn = new mysqli("localhost", "$name", "$password","$db");

        /* verifica se ocorreu algum erro na ligação */
        
        if ($conn->connect_error) {
            die("Connection failed! "."<br>"."Please verify user name and password " . $conn->connect_error);
        }
        
         
        


        $conn = mysqli_init();
        $success = mysqli_real_connect(
        $conn,
        $host,
        $name,
        $password,
        $db,
        $port
        );
        
        
        
              
                




        
?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

            <br>
            <br>
            <button><a href='searchdataform.php' alt='Broken Link'>New Consult</a></button>
            <button><a href='index.php' alt='Broken Link'>Main Menu</a></button>
            
            <br>
            
            <center>
                <h1>List of Car Found</h1>
                <?php

                $sql = "SELECT * FROM cars where car_brand='".$brand."' OR car_model='".$model."'OR car_year='".$year."'"; 
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_array($result))
      {
       
        echo $row['id'] . " " . $row['car_brand']. " " . $row['car_model']. " " . $row['car_year']; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }
          }
         else {
          echo "Table has no results for this data!";
        }
        
        mysqli_close($conn);
        ?>
            </center>
      
    </body>
</html>
