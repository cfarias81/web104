<?php
      
        /* Verificar se o formulário foi submetido */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $name = filter_input(INPUT_POST, 'name');
            $password = filter_input(INPUT_POST, 'password');
            $db = filter_input(INPUT_POST, 'database');
            $table = 'cars';
           
            $cl1 = 'car_brand';
            $cl2 = 'car_model';
            $cl3 = 'car_year';
            
            $host = 'localhost';
            $port = 3306; 
            
            

            /* validar os dados recebidos do formulario */
            if (empty($name)||empty($password)){
                echo "You must log in!  ";
                exit();
            }    
        }
        else{
        echo " Error, login not submited! ";
        exit();
        }


        /* estabelece a ligação à base de dados */
        $conn = new mysqli("localhost", "$name", "$password");

        /* verifica se ocorreu algum erro na ligação */
        
        if ($conn->connect_error) {
            die("Connection failed! "."<br>"."Please verify user name and password " . $conn->connect_error);
        }
        else{
            echo "Valid Login."."<br>"."Connected successfully to the database"."<br>";
        }
         
        // Create database
        $sql = "CREATE DATABASE ".$db .";";
        if ($conn->query($sql) === TRUE) {
            echo "The Database **".$db."**  was created successfully!"."<br>";
        } else {
            echo "Error creating database: " . $conn->error;
        }
        $conn->close();


        $conn = mysqli_init();
        $success = mysqli_real_connect(
        $conn,
        $host,
        $name,
        $password,
        $db,
        $port
        );
        
        
        // Create table
        
        $sql ="CREATE TABLE ".$table." (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,".$cl1." varchar(255), ".$cl2." varchar(255), ".$cl3." varchar(255));";
        $result= $conn->query($sql);
        print_r($result);

        // Create table
        if ($result === TRUE) {
            echo "Table  **".$table."**  created successfully"."<br>"."Table has these Columns:"."<br>".$cl1."<br>".$cl2."<br>".$cl3."<br>";
        } 
        else {
            echo "Error creating table: " . $conn->error;
        }
    
    $conn->close();
?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

            <br>
            <br>
            <button><a href='loginform.php' alt='Broken Link'>Create New Database</a></button>
            <button><a href='insertdataform.php' alt='Broken Link'>Inserir Carros</a></button>
            <button><a href='index.php' alt='Broken Link'>Main Menu</a></button>

            
      
    </body>
</html>