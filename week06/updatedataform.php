<html>
    <head>
        <title>Delete Car</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="updatedata.php">
           
         
            <h1>Update information</h1>

            Database Name:
            <br>
            
            <input type="text" name="database"><br>
            <br>
            <br>

            <br>
            Please enter the Car's ID you would like to update:
            
            <br>
            <input type="text" name="id"><br>
            <br>
            Please enter the Car's New Brand:
            
            <br>
            <input type="text" name="brand"><br>
            or
            <br>

            
           Enter the Car's New Model:
            
            <br>
            <input type="text" name="model"><br>

           or<br>
            
            Enter the Car's New Year:
            
            <br>
            <input type="text" name="year"><br>
            
            <br>
            <br>
            <br>
            <input type="submit" value="Update">
            <button><a href='index.php' alt='Broken Link'>Main Menu</a></button>

        </form>
    </body>
</html>