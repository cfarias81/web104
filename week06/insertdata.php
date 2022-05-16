<?php
      
        /* Verificar se o formulário foi submetido */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $name = 'root';
            $password = 'mysql';
            $db = filter_input(INPUT_POST, 'database');
            
           
            $vl1 = filter_input(INPUT_POST, 'brand');
            $vl2 = filter_input(INPUT_POST, 'model');
            $vl3 = filter_input(INPUT_POST, 'year');
            $vl4 = '2';
            
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
        
        $sql = "INSERT INTO cars (car_brand, car_model, car_year)
                VALUES ('".$vl1."','".$vl2."','".$vl3."')" ;
              
                

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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
            <button><a href='insertdataform.php' alt='Broken Link'>Insert New Car</a></button>
            <button><a href='index.php' alt='Broken Link'>Main Menu</a></button>
            <br>
            
            <center>
                <h1>Car's List</h1>
            <?php
    $con=mysqli_connect("localhost","root","mysql","$db");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM cars");
    
    while($row = mysqli_fetch_array($result))
      {
       
        echo $row['id'] . " " . $row['car_brand']. " " . $row['car_model']. " " . $row['car_year']; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }

    mysqli_close($con);
    ?>
            </center>
      
    </body>
</html>
