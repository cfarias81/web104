<html>
    <head>
        <title>Insert Data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="insertdata.php">
           
         
            <h1>Insert New Car</h1>
            
            <br>
            <br>
            Inform Car's Database Name:<br>
            <input type="text" name="database"><br>
            <br>
            
            
            Brand:<br>
            <input type="text" name="brand"><br>
            Model:<br>
            <input type="text" name="model"><br>
            Year:<br>
            <input type="text" name="year"><br>
            
            <br>
            <br>
            <br>
            <input type="submit" value="Insert Data">
            
            <button><a href='manipulatedb.php' alt='Broken Link'>Back</a></button>
        </form>
    </body>
</html>