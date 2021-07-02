<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        
        $dbhost="localhost:3306";
        $dbuser="root";
        $dbpass="amaan";
        $db="societymanagementsystem";
        $con=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connection failed:\n".$con->err);
        ?>
        
    </body>
</html>
