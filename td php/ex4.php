<!DOCTYPE html>
<html>
    <head>
        <title>ex4</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            function TransTab($tab)
            {
                foreach($tab as $val)
                {
                    $val2 = ucfirst(strtolower($val));
                    echo $val2."</br>";
                }
            }
            $t=array("oRange","arbrE","chAmps");
            echo  "Le contenu du tableau avant la transformation : </br>";
            foreach($t as $val)
            {
                echo $val."</br>" ;
            }
            echo "<br>Le contenu du tableau apres la transformation: </br>";
            TransTab($t);
        ?>
    </body>
</html>