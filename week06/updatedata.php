<?php
      
        /* Verificar se o formulário foi submetido */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $name = 'root';
            $password = 'mysql';
            $db = filter_input(INPUT_POST, 'database');
            $id = filter_input(INPUT_POST, 'id');
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
        
        if (empty($year)==0){
            $sql="UPDATE cars SET car_year='".$year."' where id='".$id."'";
              
                

            if ($conn->query($sql) === TRUE) {
            echo "Car Updated Successfully";
         
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
            $conn->close();

        }

        if (empty($brand)==0){
            $sql="UPDATE cars SET car_brand='".$brand."' where id='".$id."'";
              
                

            if ($conn->query($sql) === TRUE) {
            echo "Car Updated Successfully";
         
            }    else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
        
            $conn->close();

        }

        if (empty($model)==0){
            $sql="UPDATE cars SET car_model='".$model."' where id='".$id."'";
              
                

        if ($conn->query($sql) === TRUE) {
          echo "Car Updated Successfully";
         
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
        $conn->close();

        }
        
         
        
              
                




        
?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

            <br>
            <br>
            <button><a href='updatedataform.php' alt='Broken Link'>Back to Update Page</a></button>
            <button><a href='index.php' alt='Broken Link'>Main Menu</a></button>
            
            <br>
            
            <center>
                
                <?php
                
              //  $sql = "SELECT * FROM cars"; 
        //$result = mysqli_query($conn, $sql);
       // if (mysqli_num_rows($result) > 0) {
          // output data of each row
         // while($row = mysqli_fetch_array($result))
     // {
       
       // echo $row['id'] . " " . $row['car_brand']. " " . $row['car_model']. " " . $row['car_year']; //these are the fields that you have stored in your database table employee
      //echo "<br />";
      //}
         // }
         //else {
         // echo "Table has no results for this data!";
        //}
        
        //mysqli_close($conn);
        ?>
            </center>
      
    </body>
</html>
