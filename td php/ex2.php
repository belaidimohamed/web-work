<!DOCTYPE html>
<html>
    <head>
        <title>ex2</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styleex2.css"/>
    </head>
    <body>
        <?php
            $tab1 = array(15,26,4,45);
            $tab2 = array(2,3,1);
            $tab1[2] = $tab2;
            $tab3 = array("2"=>cos(4), "3"=>cos(45), "1"=>cos(26));
        ?>
        <table class="table">
            <tr>
                <td>X</td>
                <td>cos(X)</td>
            </tr>
            <?php foreach ($tab3 as $cle=>$valeur)
            { ?>
            <tr>
                <td><?php echo $cle ?></td>
                <td><?php echo $valeur ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>