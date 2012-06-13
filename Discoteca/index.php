<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php        
        include 'BD.php';
        $bd= new BD();
        
        $query= $bd->query($statement);        

        ?>
    </body>
</html>
